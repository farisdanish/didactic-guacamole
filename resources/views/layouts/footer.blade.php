    </main>
    <footer>
        <!--Footer-->
        <center>
        <span><img src="{{ asset('img/logojpkn.png') }}" width="90" height="60" alt="JPKN logo"><b>Hak Cipta Terpelihara Jabatan Perkhidmatan Komputer Negeri &copy; 2024</b></span>
        </center>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSidebar(){
          const sidebar = document.querySelector('.sidebar')
          sidebar.style.display = 'flex'
        }
    </script>
    <script>
        function hideSidebar(){
          const sidebar = document.querySelector('.sidebar')
          sidebar.style.display = 'none'
        }
    </script>
    @yield('scripts')
</body>
</html>