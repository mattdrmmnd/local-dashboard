
<!--<p>--------------------------------------</p>
<h3>LocalHost:</h3>
<a href="http://localhost/phpmyadmin/" target="_blank">phpMyAdmin</a>
<br><br>
<a href="http://localhost/wp/wp-admin" target="_blank">local wp</a>
<br><br>
<p>--------------------------------------</p>-->



<h3>My Applications:</h3>
<a href="http://localhost/local_dashboard/calculator/">Calculator</a><br><br>
<p>--------------------------------------</p>

<h3>Bash Commands:</h3>
<a href="bash_commands.php">Bash Commands</a><br><br>
<p>--------------------------------------</p>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const moreBtn = document.getElementById('more_btn');
    const extraLinks = document.querySelectorAll('.extra_link');

    moreBtn.addEventListener('click', function() {
        extraLinks.forEach(link => link.classList.toggle('hidden'));

        if (moreBtn.innerText === 'Show more') {
            moreBtn.innerText = 'Show less';
        } else {
            moreBtn.innerText = 'Show more';
        }
    });
});
</script>

<h3>Full-Stack Resources:</h3>
<ul id="link_list">
  <li><a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">Bootstrap Docs</a></li>
  <li><a href="https://git-scm.com/docs" target="_blank">Git Docs</a></li>
  <li><a href="https://github.com/" target="_blank">GitHub</a></li>
  <li><a href="https://www.php.net/docs.php" target="_blank">PHP Docs</a></li>
  <li class="extra_link hidden"><a href="https://laravel.com/" target="_blank">Laravel</a></li>
  <li class="extra_link hidden"><a href="https://dev.mysql.com/doc/" target="_blank">MYSQL Docs</a></li>
  <li class="extra_link hidden"><a href="https://nextjs.org/" target="_blank">Next.JS</a></li>
  <li class="extra_link hidden"><a href="https://react.dev/" target="_blank">React</a></li>
  <li class="extra_link hidden"><a href="https://stackoverflow.com" target="_blank">Stack Overflow</a></li>
  <li class="extra_link hidden"><a href="https://tailwindcss.com/docs/installation/using-vite" target="_blank">Tailwind CSS Docs</a></li>
  <li class="extra_link hidden"><a href="https://www.w3.org/" target="_blank">W3C</a></li>
  <li class="extra_link hidden"><a href="https://www.w3schools.com/" target="_blank">W3 Schools</a></li>
  <li class="extra_link hidden"><a href="https://wordpress.org/documentation/" target="_blank">Wordpress Docs</a></li>
</ul>

<button id="more_btn" type="button">
    Show more
</button>





<p>--------------------------------------</p>

<h3>Take a look:</h3>
<a href="https://survey.stackoverflow.co/2025/" target="_blank">2025 Developer Survey</a><br><br>

<p>--------------------------------------</p>