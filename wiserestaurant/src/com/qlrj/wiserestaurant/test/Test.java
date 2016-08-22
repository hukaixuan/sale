package com.qlrj.wiserestaurant.test;

import java.text.SimpleDateFormat;
import java.util.Date;

public class Test {
	
	
	public static void main(String[] args) throws Exception {
		/*GoodDao goodDao = new GoodDao();
		List<Good> goodList=null;
		List<Good> goodTopList=null;
		GoodListInfo goodListInfo = new GoodListInfo();
		try {
			goodList = goodDao.getGoodList();
			goodTopList = goodDao.getGoodTopList();
		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		goodListInfo.topGoodinfos=goodTopList;
		goodListInfo.goodinfos=goodList;
		
		String json = new Gson().toJson(goodListInfo);
		System.out.println(json);*/
		
		
		/*TypeDao typeDao = new TypeDao();
		CategoryDao categoryDao = new CategoryDao();
		List<Type> vagetableTypes=null;
		List<Category> categories=null;
		try {
			vagetableTypes = typeDao.getVagetableTypes();
			categories=categoryDao.getGoodTypes();
		} catch (Exception e) {
			e.printStackTrace();
		}
		
		TypeInfo typeInfo = new TypeInfo();
		typeInfo.categories=categories;
		Gson gson = new Gson();
		String json = gson.toJson(typeInfo);
		System.out.println(json);*/
		System.out.println(getDateFormat(1469759528350L));
		
		
		
	}
	
	public static String getDateFormat(long time) {
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd hh:mm:ss");
		String date= sdf.format(new Date(time));
		return date.substring(11);
	}
}
