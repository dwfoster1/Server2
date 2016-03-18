package manhunt.mysql_demo;

import android.os.Bundle;
import android.preference.PreferenceManager;
import android.app.Activity;
import android.content.Intent;
import android.content.SharedPreferences;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;


public class Lobby extends Activity {
    SharedPreferences.Editor fd;
    SharedPreferences FeedPref;
    EditText  txt1;
    EditText txt2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lobby);

        txt1=(EditText)findViewById(R.id.editText1);
        txt2=(EditText)findViewById(R.id.editText2);

        Button submit=(Button)findViewById(R.id.button1);
        FeedPref=PreferenceManager.getDefaultSharedPreferences(getBaseContext());
        fd=FeedPref.edit();

        submit.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                txt1=(EditText)findViewById(R.id.editText1);
                txt2=(EditText)findViewById(R.id.editText2);

                FeedPref=PreferenceManager.getDefaultSharedPreferences(getBaseContext());
                fd=FeedPref.edit();
                String u_name=txt1.getText().toString();
                String pwdtxt=txt2.getText().toString();
                fd.putString("uname", u_name);
                fd.putString("pwd",pwdtxt);
                fd.commit();
                Intent sample2=new Intent(Lobby.this,sharedList.class);
                startActivity(sample2);

            }
        });

    }
}