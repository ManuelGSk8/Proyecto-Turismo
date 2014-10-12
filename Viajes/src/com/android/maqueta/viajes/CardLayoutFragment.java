package com.android.maqueta.viajes;

import java.util.ArrayList;

import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.View.OnClickListener;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ListView;
import android.widget.Toast;

public class CardLayoutFragment extends Fragment {

	private ListView cardsList;
	
	public CardLayoutFragment(){
		
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container,
			Bundle savedInstanceState) {
		
		View rootView = inflater.inflate(R.layout.fragment_card_layout, container,false);
		cardsList = (ListView)rootView.findViewById(R.id.cards_list);
		setupList();
		return rootView;
	}
	
	
	private void setupList(){
		cardsList.setAdapter(createAdapter());
		cardsList.setOnItemClickListener(new ListItemClickListener());
	}
	
	private CardsAdapter createAdapter(){
		ArrayList<String> items = new ArrayList<String>();
		
		for (int i = 0; i < 100; i++){
			items.add(i,"Text for List Item " + i);
		}
		
		return new CardsAdapter(getActivity(), items, new ListItemButtonClickListener());
	}
	
	private final class ListItemButtonClickListener implements OnClickListener{

		@Override
		public void onClick(View v) {
			for(int i = cardsList.getFirstVisiblePosition(); i <= cardsList.getLastVisiblePosition(); i++){
				if(v == cardsList.getChildAt(i - cardsList.getFirstVisiblePosition()).findViewById(R.id.list_item_card_button_1)){
					Toast.makeText(getActivity(), "Clicked on left Action Button of List Item" + i, Toast.LENGTH_SHORT).show();
				}
				else if(v == cardsList.getChildAt(i - cardsList.getFirstVisiblePosition()).findViewById(R.id.list_item_card_button_2)){
					Toast.makeText(getActivity(), "Clicked on Right Action Button of List Item", Toast.LENGTH_SHORT).show();
				}
			}			
		}		
	}
	
	
	private final class ListItemClickListener implements OnItemClickListener{

		@Override
		public void onItemClick(AdapterView<?> parent, View view, int position,
				long id) {
			// TODO Auto-generated method stub
			Toast.makeText(getActivity(), "Click on List Item" + position, Toast.LENGTH_SHORT).show();
			
		}
		
	}
	
	
}
