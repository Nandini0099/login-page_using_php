<!Doctype html>
<html lang= "en">
<head>
  <meta charset ="UTF-8">
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
  <title>STUDENT REGISTER</title>
</head>
<body style="background-color:green;">
  <main>
    <form action ="register.php" method="post">
      <h1>STUDENT REGISTRATION</h1>

      <div>
        <label for="username" style="background-color:red">STUDENT NAME:</label>
        <input type="text" name ="username" id="username" >
      </div>
       <div>
          <label for="email"> STUDENT EMAIL:</label>
          <input type="email" name="email" id="email">
        </div>
         <div>
            <label for="student phoneno">STUDENT PHONE NO:</label>
            <input type="student phoneno" name="student phoneno" id="student phoneno">
          </div>
          <div>
            <label for="password"> PASSWORD:</label>
            <input type="password"username id="password">
          </div>
          <div>
            <label for ="agree">
              <input type="cheackbox" name="agree" id="agree" values="yes"/>
              iagree with the
          <a href="#" title="term of services">term of services</a>
        </label>
        <button type="submit">REGISTER</button>
  <form>
</main>
</body>
</html>
