package com.qlrj.wiserestaurant.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import com.qlrj.wiserestaurant.domain.Good;
import com.qlrj.wiserestaurant.util.JDBCUtil;


public class GoodDao {
	
	public  Good getGoodById(String sid) throws Exception{
		int id =Integer.parseInt(sid);
		Connection conn=JDBCUtil.getConnection();
		String sql=" select * from goods where id=?  ";
		PreparedStatement stmt=conn.prepareStatement(sql);
		stmt.setInt(1, id);
		ResultSet res=stmt.executeQuery();
		res.next();
		String name=res.getString(2);
		int type =res.getInt(3);
		int category =res.getInt(4);
		int isAvail=res.getInt(5);
		String detail=res.getString(6);
		String pic=res.getString(7);
		float price =res.getFloat(8);
		String detailPics=res.getString(9);
		Good good = new Good(id,name, type, category, isAvail, price,pic,detail,detailPics);
		return good;
	}
	/**
	 * 根据菜品的分类查找该类别下的所有菜品
	 * @param typeStr
	 * @return
	 * @throws Exception
	 */
	public List<Good>  getGoodListByType(String typeStr) throws Exception{
		int type=Integer.parseInt(typeStr);
		Connection conn=JDBCUtil.getConnection();
		String sql=" select * from goods  where type= ?";
		PreparedStatement stmt=conn.prepareStatement(sql);
		stmt.setInt(1, type);  //  1  based   
		ResultSet res=stmt.executeQuery();
		List<Good> goodsList=new ArrayList<Good>();
		while(res.next()){
			int id=res.getInt(1);
			String name=res.getString(2);
//			int type =res.getInt(3);
			int category =res.getInt(4);
			int isAvail=res.getInt(5);
			String detail=res.getString(6);
			String pic=res.getString(7);
			float price =res.getFloat(8);
			String detailPics=res.getString(9);
			Good good = new Good(id,name, type, category, isAvail, price,pic,detail,detailPics);
			goodsList.add(good);
		}
		
		return goodsList;
		
	}
	/**
	 * 根据其他good 的category 查找good  
	 * @param typeStr
	 * @return
	 * @throws Exception
	 */
	public List<Good>  getGoodListByCategory(String categoryStr) throws Exception{
		int category=Integer.parseInt(categoryStr);
		Connection conn=JDBCUtil.getConnection();
		String sql=" select * from goods  where category = ?";
		PreparedStatement stmt=conn.prepareStatement(sql);
		stmt.setInt(1, category);  //  1  based   
		ResultSet res=stmt.executeQuery();
		List<Good> goodsList=new ArrayList<Good>();
		while(res.next()){
			int id=res.getInt(1);
			String name=res.getString(2);
			int type =res.getInt(3);
//			int category =res.getInt(4);
			int isAvail=res.getInt(5);
			String detail=res.getString(6);
			String pic=res.getString(7);
			float price =res.getFloat(8);
			String detailPics=res.getString(9);
			Good good = new Good(id,name, type, category, isAvail, price,pic,detail,detailPics);
			goodsList.add(good);
		}
		
		return goodsList;
		
	}
	public List<Good>  getGoodTopList(String typeStr) throws Exception{
		
		int type=Integer.parseInt(typeStr);
		Connection conn=JDBCUtil.getConnection();
		String sql=" select * from goods where type = ?   limit ?,? ";
		PreparedStatement stmt=conn.prepareStatement(sql);
		stmt.setInt(1, type);
		stmt.setInt(2, 0);
		stmt.setInt(3, 4);
		ResultSet res=stmt.executeQuery();
		List<Good> goodsList=new ArrayList<Good>();
		while(res.next()){
			int id=res.getInt(1);
			String name=res.getString(2);
//			int type =res.getInt(3);
			int category =res.getInt(4);
			int isAvail=res.getInt(5);
			String detail=res.getString(6);
			String pic=res.getString(7);
			float price =res.getFloat(8);
			String detailPics=res.getString(9);
			Good good = new Good(id,name, type, category, isAvail, price,pic,detail,detailPics);
			goodsList.add(good);
		}
		
		return goodsList;
		
	}

}
