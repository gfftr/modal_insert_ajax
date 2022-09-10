 <html>

 <head>
  <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">


 </head>


 <body>






  <br /><br />
  <div class="container" style="width:700px;">
   <h3 align="center">PHP Ajax Update MySQL Data Through Bootstrap Modal</h3>
   <br />
   <div class="table-responsive">
    <div align="right">

     <label for="modal_1" class="button">Add User</label>

    </div>
    <br />
    <div id="employee_table">
     <table class="primary">
      <thead>
       <tr>
        <th>Name</th>
        <th>City</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Francisco</td>
        <td>Valencia, Spain</td>
       </tr>
       <tr>
        <td>Eve</td>
        <td>San Francisco, USA</td>
       </tr>
       <tr>
        <td>Martin</td>
        <td>New York, USA</td>
       </tr>
       <tr>
        <td>Sarah</td>
        <td>London, UK</td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>
 </body>

 </html>






 <div class="modal">
  <input id="modal_1" type="checkbox" />
  <label for="modal_1" class="overlay"></label>
  <article>
   <header>
    <h3>Great offer</h3>
    <label for="modal_1" class="close">&times;</label>
   </header>
   <section class="content">
    <form method="post" id="insert_form">
     <!-- <fieldset class="flex two">
      <label><input type="email" placeholder="Email"></label>
      <label><input type="password" placeholder="Password"></label>
     </fieldset>
     <div class="third">
      <input class="stack" placeholder="Name" />
      <input class="stack" placeholder="Email" />
      <button class="stack icon-paper-plane">
       Send
      </button>
     </div> -->
     <form method="post" id="insert_form">
      <label>Enter Employee Name</label>
      <input type="text" name="name" id="name" class="form-control" />
      <br />
      <label>Enter Employee Address</label>
      <textarea name="address" id="address" class="form-control"></textarea>
      <br />
      <label>Select Gender</label>
      <select name="gender" id="gender" class="form-control">
       <option value="Male">Male</option>
       <option value="Female">Female</option>
      </select>
      <br />
      <label>Enter Designation</label>
      <input type="text" name="designation" id="designation" class="form-control" />
      <br />
      <label>Enter Age</label>
      <input type="text" name="age" id="age" class="form-control" />
      <br />
      <input type="hidden" name="employee_id" id="employee_id" />
      <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
     </form>
    </form>
   </section>
   <footer>
    <!-- <a class="button" href="#">See offer</a>
    <label for="modal_1" class="button dangerous">
     Cancel
    </label> -->
   </footer>
  </article>
 </div>



 </div>
 </div>
 </div>