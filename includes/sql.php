<script>
function copy(btn) {
    var copyText = btn.previousElementSibling;
    navigator.clipboard.writeText(copyText.textContent.trim())
        //.then(() => alert("Copied the text: " + copyText.textContent.trim()))
        .then(() => showToast("Copied to Clipboard!"))
        .catch(err => alert("Copy failed: " + err));
}
function showToast(message) {
    var toast = document.createElement("div");
    toast.textContent = message;
    toast.style.cssText = "position:fixed; bottom:20px; left:50%; transform:translateX(-50%); background:#333; color:#fff; padding:10px 16px; border-radius:6px; z-index:9999;";
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2000);
}
</script>

<style>
    code {
        display: block;
        margin-bottom: 8;
        }
</style>

<h3>SQL queries</h3>

<p>--------------------------</p>
<p style: color="#fff123">Create Table</p>
<code>
    CREATE TABLE users (
        id INT(11) NOT NULL AUTO_INCREMENT,
        username VARCHAR(30) NOT NULL,
        pwd VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
        PRIMARY KEY (id)
    ):
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p style: color="blue">Insert Data</p>
<code>
    INSERT INTO users 
    (username, pwd, email) 
    VALUES ('Drummond', 'matt143', 'matt@optmzd.net');
</code>
<button onclick="copy(this)">Copy text</button>

<br><br>
<code>
    INSERT INTO comments 
    (username, comment_text, users_id) 
    VALUES ('optmzd', 'Matt is a Top Tier Web Engineer!', 3);
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p color="green">Update Data</p>
<code>

    <!-- WHERE can include conditionals -->

    UPDATE users 
    SET username = 'optmzd', 
    pwd ='Addflu3ncE100' 
    WHERE id = 1; 
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p color="red">Delete Data</p>
<code>
    DELETE FROM users 
    WHERE id = 1;
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p color="purple">Select Data</p>
<code>
    SELECT username, email 
    FROM users 
    WHERE id = 3;
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p color="purple">Select ALL Data</p>
<code>
    <!-- * Selects everything -->

    SELECT * 
    FROM comments 
    WHERE users_id = 3; 
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p color="purple">Select Data INNER JOIN</p>
<code>
    <!-- INNER JOIN - Joins two tables together as one -->

    SELECT users.username, comments.comment_text, comments.created_at 
    FROM users INNER JOIN 
    comments ON users.id = comments.users_id; 
</code>
<button onclick="copy(this)">Copy text</button>

<p>--------------------------</p>
<p color="purple">Select Data LEFT JOIN</p>
<code>
    <!-- Returns data from the left which is data if it meets all criteria after word ON RIGHT JOIN would return comments table that meet the same criteria only -->

    SELECT * FROM users LEFT JOIN 
    comments ON users.id = comments.users_id; 
</code>
<button onclick="copy(this)">Copy text</button>

</script>

<br><br><br><br><br><br><br><br><br><br>