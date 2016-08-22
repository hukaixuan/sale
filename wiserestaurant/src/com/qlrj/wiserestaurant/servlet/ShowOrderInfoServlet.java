package com.qlrj.wiserestaurant.servlet;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.ServletOutputStream;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.google.gson.Gson;
import com.qlrj.wiserestaurant.dao.OrderDao;
import com.qlrj.wiserestaurant.domain.OrderInfos;

@WebServlet("/ShowOrderInfoServlet")
public class ShowOrderInfoServlet extends HttpServlet {
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String orderNum = request.getParameter("orderNum");
		
		System.out.println("orderNum"+orderNum);
		if(!"".equals(orderNum)){//在有订单号的情况下
			OrderDao myOrder=(OrderDao)request.getServletContext().getAttribute(orderNum);//将操作订单的到保存到application域中
			
			if(myOrder!=null){
				OrderInfos orderItemInfos=null;
				try {
					orderItemInfos = myOrder.showAllGoods();
				} catch (Exception e) {
					e.printStackTrace();
				}
				Gson gson = new Gson();
				String json = gson.toJson(orderItemInfos);
				System.out.println(json);
				ServletOutputStream outputStream = response.getOutputStream();
				outputStream.write(json.getBytes("utf-8"));
				outputStream.flush();

				
			}else{
				ServletOutputStream outputStream = response.getOutputStream();
				outputStream.write("0".getBytes());//返回0则表示还没有创建订单对象。
				outputStream.flush();
			}
		}
		
		
		
	}
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
