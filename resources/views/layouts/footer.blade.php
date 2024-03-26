    </main>
    <footer>
        <!--Footer-->
        @yield('footer-content')
    </footer>
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