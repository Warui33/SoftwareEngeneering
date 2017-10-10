<html>
 <head>
 	<title>Order Form</title>
 </head>

 <body>
 	<form  name='order' action='edit.php' method='post'>
        <fieldset style='text-align: center'>
        <legend style align='center'>Order</legend>

         
        <H4 style = 'color: black'>Client ID: <input type='text' name='cid'><br><br><br><br>

         <H4 style = 'color: black'>Prouct Name: <select name='pname'>
          <option value='Mangoes'>Mangoes</option>
          <option value='Oranges'>Oranges</option>
          <option value='Bananas'>Bananas</option>
          <option value='Avocados'>Avocados</option>
          <option value='Pawpaws'>Pawpaws</option>
          <option value='Tangerines'>Tangerines</option>
          </select><br><br><br><br><br>
         
        <H4 style = 'color: black'>Desired Quantity: <select name='quantity'>
          <option value='One'>One</option>
          <option value='Two'>Two</option>
          <option value='Three'>Three</option>
          <option value='Four'>Four</option>
          <option value='Five'>Five</option>
          <option value='Six'>Six</option>
          <option value='More than six'>More than six</option>
          </select><br><br><br><br><br>

        <H4 style = 'color: black'>Delivery Address: <input type='text' name='address'><br><br><br><br><br><br>
        <H4 style = 'color: black'>Phone Number: <input type='text' name='number'><br><br><br><br><br><br>

        <H4 style = 'color: black'>Payment Options: <select name='payment'>
          <option value='Mpesa'>Mpesa</option>
          <option value='CoD'>Cash on Delivery</option>
          <option value='Credit Card'>Credit Card</option>
          </select><br><br><br><br><br><br><br>

          <input type='submit' name='order' value='Place Order'><br><br><br><br><br><br><br><br>
         </fieldset>
         </form>
     </body>
     </html>
