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
  <li><code>git config --list</code> — List of settings</li>
  <li><code>cd</code> — Change a directory // ex, <code>cd "C:\xampp\htdocs"</code></li>
  <li><code>cd ..</code> — Parent directory (main)</li>
  <li><code>mkdir git-beginners</code> — Make a new directory and name it</li>
  <li><code>git init</code> — Creates new repository in the directory ".git"</li>
  <li><code>ls</code> || <code>ls -a</code> — List files and folders within directory || all</li>
  <li><code>git status</code> — Current status of working directory</li>
  <li><code>touch index.html style.css</code> — Creates new files. If status is checked, these files will return as untracked</li>
  <li><code>rm filename.txt
</code> — // Removes a file</li>
  <li><code>git add index.html style.css</code> (Staging) — Stages the files & creates a hash for each file. Files are now ready to commit</li>
  <li><code>git add .</code> (Staging) — This will automatically add any new changes to staging that git detects. Beware — you could stage a file that you didn't intend to. Run <code>git status</code> afterwards for good measure</li>
  <li><code>git commit -m "add index.html and style.css"</code> — Commits files to repository & adds a message. Creates a unique 40 character hash</li>
  <li><code>git commit -a -m</code> — Stage and commit at the same time. Check status to be certain of files being committed</li>
  <li><code>code .</code> — Opens VS Code in the current folder</li>
  <li><code>git diff</code> — Shows difference between current working directory files and anything that may be in the staging area. Shows unstaged difference by default</li>
  <li><code>git diff --staged</code> — Shows difference between the staging area and most recent commit</li>
</ul>

</body>
</html>