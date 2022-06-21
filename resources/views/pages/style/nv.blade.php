<style>
    .bg-faded {
  background-color: var(--clr-white);
}

.mainmenu-area {
  padding: 10px 0;
  border: none;
  margin: 0;
  -webkit-transition: 1s;
  -moz-transition: 1s;
  transition: 1s;
  box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1);
  background-color: var(--clr-white);
}

.mainmenu-area .menu-button {
  position: relative;
  color: #263238;
  line-height: 58px;
  top: 0;
  outline: none;
}

.logo-menu a {
  font-size: 24px;
  text-transform: uppercase;
  color: var(--clr-white);
}

.menu-bg {
  background-color: var(--clr-white) !important;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
  z-index: 999;
  padding: 3px;
}

.menu-bg .menu-button {
  top: 0;
}

.menu-bg .menu-button:hover {
  cursor: pointer;
  color: var(--clr-red);
}

.menu-bg .logo-menu a {
  color: var(--clr-red);
}

.menu-bg .navbar-nav .nav-link {
  color: #263238 !important;
}

.menu-bg .navbar-nav .nav-link:hover {
  color: var(--clr-red-70) !important;
}

.menu-bg .navbar-nav .active {
  color: var(--clr-red-70) !important;
}

.menu-button:hover {
  cursor: pointer;
  opacity: #eee;
}

.bg-white {
  background-color: var(--clr-white) !important;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
  z-index: 999;
  padding: 5px;
}

.bg-white .menu-button {
  top: 0;
}

.bg-white .menu-button:hover {
  cursor: pointer;
  color: var(--clr-red);
}

.bg-white .logo-menu a {
  color: var(--clr-red);
}

.bg-white .navbar-nav .nav-link {
  color: #263238 !important;
}

.bg-white .navbar-nav .nav-link:hover {
  color: var(--clr-red) !important;
}

.bg-white .navbar-nav .active {
  color: var(--clr-red) !important;
}

.close-button {
  cursor: pointer;
}

.navbar-expand-md .navbar-nav .nav-link {
  color: var(--clr-white);
  font-size: 14px;
  padding: 5px 0px;
  margin-left: 20px;
  position: relative;
}

.navbar-expand-md .navbar-nav .nav-link:before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--clr-red);
  -webkit-transition: 0.6s;
  -moz-transition: 0.6s;
  transition: 0.6s;
}

.navbar-expand-md .navbar-nav .active::before,
.navbar-expand-md .navbar-nav .nav-link:hover::before {
  width: 60%;
}

.navbar-brand img {
  max-width: 115px;
}

.navbar-expand-md .navbar-nav .nav-link:focus,
.navbar-expand-md .navbar-nav .nav-link:hover,
.navbar-expand-md .navbar-nav .nav-link:hover:before {
  color: var(--clr-red);
}

.navbar-expand-md .navbar-nav .active > .nav-link,
.navbar-expand-md .navbar-nav .nav-link.active,
.navbar-expand-md .navbar-nav .nav-link.active:before,
.navbar-expand-md .navbar-nav .nav-link.open,
.navbar-expand-md .navbar-nav .open > .nav-link {
  color: var(--clr-red);
}

.navbar-expand-md .navbar-toggler {
  background: var(--bck-red-50);
  border-radius: 10px;
  margin: 5px;
  cursor: pointer;
  float: right;
}

.navbar-expand-md .navbar-toggler i {
  color: var(--clr-white) !important;
}

.mainmenu-area .navbar-nav .nav-link {
  color: #263238 !important;
}

.collapse.show {
  background: #3e3a3a;
  margin-bottom: 10px;
  -webkit-transition: 0.6s;
  -moz-transition: 0.6s;
  transition: 0.6s;
}

.menu-bg .collapse.show {
  background: var(--clr-white);
  margin-bottom: 10px;
  -webkit-transition: 0.6s;
  -moz-transition: 0.6s;
  transition: 0.6s;
}

.navbar-expand-md .navbar-toggler:active {
  border: 1px solid var(--clr-red);
  color: var(--clr-red);
}
</style>
