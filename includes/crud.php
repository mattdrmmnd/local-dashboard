 <h3>CRUD</h3>
 
 <form class="searchform" action="search.php" method="post">
        <label for="search">Search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder="Search">
        <button>Search</button>
    </form>
    <p>--------------------------------------------------------------</p>

    <h3>Sign Up</h3>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Signup</button>
    </form>

    <h3>Change Account</h3>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Update</button>
    </form>

    <h3>Delete Account</h3>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
    </form>

    <br>

