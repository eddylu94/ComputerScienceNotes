            </div>

            <div id="footer" style="margin: 30px 0px; text-align: center; color: white;">
                &copy; 2014-<span id="footer_year"></span> Eddy Lu | <a href="../statistics.php">Statistics</a>
                <script>
                    var footerYear = document.getElementById("footer_year");
                    footerYear.innerHTML = (new Date()).getFullYear();
                </script>
            </div>

            <script>

                var onResize = function() {
                    document.getElementById("navMenu").style.height = document.getElementById("container").clientHeight;
                }

                var onScroll = function() {
                    document.getElementById("navMenu").style.marginTop = document.body.scrollTop;
                }

                $(window).resize(function() {
                    onResize();
                });

                window.onscroll = function() {
                    onScroll();
                };

                onResize();
                onScroll();

            </script>

        </div>

    </div>

</div>
    
</body>

</html>