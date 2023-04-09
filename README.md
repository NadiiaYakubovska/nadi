# nadi
Create a database in phpMyAdmin with my user name. Save this data.
Create a table with student information:id,name,age and city.
Since we are inserting data we pass two extra headers.
1st allow us to set the method of insert. i.e. POST in rest api
2nd determines which type of headers can be sent. It's a secuirty header.
'Authorization' is set for authorizing insert data. While 'X-Requested-With' is set for passing data as json
This is the data which is being sent to request a single data.
 Since we know this request will be in json format we must decode before passing it into our php logic
 file_get_contents is reading file into a string. 
"php://input" is special key which insure that we can get any format of data. Even if its raw data.
True argument of json decode makes sure that we get response in assoc array
we are getting our passed data in $data array. But to ensure securty we will change name of id to sid. Remember we are being requested data on basis of sid after all.
mysqli_fetch_all gives us the data in 2D array format.
  It's second parameter decide whether its assoc array or indexed. Or maybe both
  To delete in rest api, we use DELETE method
