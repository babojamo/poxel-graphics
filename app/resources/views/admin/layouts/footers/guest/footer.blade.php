<footer class="footer py-5">
    <div class="container">
        @if (!auth()->user() || \Request::is('static-sign-up'))
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright ©  2023 Designed by
                    <a style="color: #252f40;" href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                        target="_blank">Creative Tim</a>
                    &
                    <a style="color: #252f40;" href="https://www.updivision.com" class="font-weight-bold ml-1"
                        target="_blank">UPDIVISION</a>.
                </p>
            </div>
        </div>
        @endif
    </div>
</footer>
