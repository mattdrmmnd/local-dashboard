<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Commands</title>
</head>
<body>
    

    <h3>Git Bash Commands</h3>
    <ul>
    <li style="margin-bottom: 5px;"><code>git config --list</code><br>List of settings</li>
    <li style="margin-bottom: 5px;"><code>cd</code><br>Change a directory // ex, <code>cd "C:\xampp\htdocs"</code></li>
    <li style="margin-bottom: 5px;"><code>cd ..</code><br>Parent directory (main)</li>
    <li style="margin-bottom: 5px;"><code>mkdir git-beginners</code><br>Make a new directory and name it</li>
    <li style="margin-bottom: 5px;"><code>git init</code><br>Creates new repository in the directory ".git"</li>
    <li style="margin-bottom: 5px;"><code>ls</code> || <code>ls -a</code><br>List files and folders within directory || all</li>
    <li style="margin-bottom: 5px;"><code>git status</code><br>Current status of working directory</li>
    <li style="margin-bottom: 5px;"><code>touch index.html style.css</code><br>Creates new files. If status is checked, these files will return as untracked</li>
    <li style="margin-bottom: 5px;"><code>rm filename.txt</code><br>Removes a file</li>
    <li style="margin-bottom: 5px;"><code>git add index.html style.css</code> (Staging)<br>Stages the files & creates a hash for each file. Files are now ready to commit</li>
    <li style="margin-bottom: 5px;"><code>git add .</code> (Staging)<br>This will automatically add any new changes to staging that git detects. Beware — you could stage a file that you didn't intend to. Run <code>git status</code> afterwards for good measure</li>
    <li style="margin-bottom: 5px;"><code>git commit -m "add index.html and style.css"</code><br>Commits files to repository & adds a message. Creates a unique 40 character hash</li>
    <li style="margin-bottom: 5px;"><code>git commit -a -m</code><br>Stage and commit at the same time. Check status to be certain of files being committed</li>
    <li style="margin-bottom: 5px;"><code>code .</code><br>Opens VS Code in the current folder</li>
    <li style="margin-bottom: 5px;"><code>git diff</code><br>Shows difference between current working directory files and anything that may be in the staging area. Shows unstaged difference by default</li>
    <li style="margin-bottom: 5px;"><code>git diff --staged</code><br>Shows difference between the staging area and most recent commit</li>
    </ul>

</body>
</html>