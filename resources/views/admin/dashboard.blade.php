<!-- admin.dashboard -->
<h1>Selamat datang Admin!</h1>
<h1>Selamat datang Admin!</h1>

 <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>