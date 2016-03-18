package manhunt.mysql_demo;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class Register extends AppCompatActivity {
    EditText name_db, username_db, password_db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        name_db = (EditText)findViewById(R.id.et_name);
        username_db = (EditText)findViewById(R.id.et_username);
        password_db = (EditText)findViewById(R.id.et_password);
    }

    public void OnReg(View view) {
        String str_name = name_db.getText().toString();
        String str_username = username_db.getText().toString();
        String str_password = password_db.getText().toString();
        String type = "register";
        BackgroundWorker backgroundWorker = new BackgroundWorker(this);
        backgroundWorker.execute(type, str_name, str_username, str_password);
    }

}