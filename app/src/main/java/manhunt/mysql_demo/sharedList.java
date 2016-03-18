package manhunt.mysql_demo;


import java.util.Map;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.app.Activity;
import android.app.ListActivity;
import android.content.SharedPreferences;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.TextView;
import android.widget.Toast;

public class sharedList extends Activity {
    String[] presidents;
    ListView listView;
    ArrayAdapter<String> adapter;
    SharedPreferences FeedPref;
    SharedPreferences.Editor fd;
    TextView txt1,txt2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_shared_list);

        listView = (ListView) findViewById(R.id.list);

        FeedPref=PreferenceManager.getDefaultSharedPreferences(getBaseContext());
        String  uname=FeedPref.getString("uname",null);
        String  password=FeedPref.getString("pwd", null);
        String[] values = new String[] {uname,password};
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1, android.R.id.text1, values);



        listView.setAdapter(adapter);

    }
}