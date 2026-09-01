<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Commands</title>
</head>
<body>
    

<style>
    .git-guide code {
        font-size: 1.5em;
        font-weight: bold;
    }
    .git-guide li {
        margin-bottom: 15px;
    }
</style>

<h3>Git Bash Commands</h3>
    <ul class="git-guide">
    <li><code>git config --list</code><br>List of settings</li>
    <li><code>cd</code><br>Change a directory // ex, <code>cd "C:\xampp\htdocs"</code></li>
    <li><code>cd ..</code><br>Parent directory (main)</li>
    <li><code>mkdir git-beginners</code><br>Make a new directory and name it</li>
    <li><code>git init</code><br>Creates new repository in the directory ".git"</li>
    <li><code>ls</code> || <code>ls -a</code><br>List files and folders within directory || all</li>
    <li><code>git status</code><br>Current status of working directory</li>
    <li><code>touch index.html style.css</code><br>Creates new files. If status is checked, these files will return as untracked</li>
    <li><code>rm filename.txt</code><br>Removes a file</li>
    <li><code>git add index.html style.css</code> (Staging)<br>Stages the files & creates a hash for each file. Files are now ready to commit</li>
    <li><code>git add .</code> (Staging)<br>This will automatically add any new changes to staging that git detects. Beware — you could stage a file that you didn't intend to. Run <code>git status</code> afterwards for good measure</li>
    <li><code>git commit -m "add index.html and style.css"</code><br>Commits files to repository & adds a message. Creates a unique 40 character hash</li>
    <li><code>git commit -a -m</code><br>Stage and commit at the same time. Check status to be certain of files being committed</li>
    <li><code>git commit</code><br>Running this will open a COMMIT_EDITMSG tab in VS Code. Edit message on line one</li>
    <li><code>git push -u origin main</code><br>Sends commit to GitHub. Used when setting up remote repo for the first time</li>
    <li><code>git push</code><br>Sends commit to GitHub. Use after local and origin are connected</li>
    <li><code>code .</code><br>Opens VS Code in the current folder</li>
    <li><code>git diff</code><br>Shows difference between current working directory files and anything that may be in the staging area. Shows unstaged difference by default</li>
    <li><code>git diff --staged</code><br>Shows difference between the staging area and most recent commit</li>
    <li><code>git restore path/filename.txt</code><br>Restores deleted files if no commit</li>
    <li><code>git log</code><br>Shows git history with most recent at top</li>
    <li><code>git log --oneline</code><br>Displays each commit on one line</li>
    <li><code>git log --oneline --parents</code><br>Shows parent-child relationship in log</li>
    <li><code>git revert 68e80d2</code><br>Reverts and creates new hash for previous commit</li>
    </ul>

    <h3>Branch / Merge</h3>

    <p>Note: Before merging, ensure you are on the correct branch (usually main) before proceeding.</p>
    <ul class="git-guide">
    <li><code>git branch branch_name</code><br>Creates new "FEATURE" branch</li>
    <li><code>git switch branch_name</code><br>Go to a different branch</li>
    <li><code>git switch -c branch_name</code><br>Creates and switches to new branch</li>
    <li><code>git branch</code><br>Shows all branches</li>
    <li><code>git merge welcome</code><br>Merges welcome branch into main</li>
    <li><code>git branch -d welcome</code><br>Deletes the welcome branch</li>
    </ul>

</body>
</html>