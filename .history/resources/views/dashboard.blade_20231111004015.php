<x-app-layout>
    <x-dash-header />
        <!-- ==== dashboard section start ==== -->
    <div class="dashboard section__space__bottom">
        <div class="container">
            <div class="dashboard__area">
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="sidebar">
                            <a href="javascript:void(0)" class="close__sidebar">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                            <div class="sidenav__wrapper">
                                <ul>
                                    <li>
                                        <a href="/dashboard" class="sidenav__active">
                                            <img src="assets/images/icons/dashboard.png" alt="Dashboard" /> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="investment.html">
                                            <img src="assets/images/icons/investments.png" alt="Investments" />
                                            Investments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="transaction.html">
                                            <img src="assets/images/icons/transactions.png" alt="Transactions" />
                                            Transactions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="withdraw.html">
                                            <img src="assets/images/icons/withdraw.png" alt="Withdraw" /> Withdraw
                                        </a>
                                    </li>
                                    <li>
                                        <a href="account.html">
                                            <img src="assets/images/icons/account.png" alt="Account" /> Account
                                        </a>
                                    </li>
                                </ul>
                                <hr />
                                <ul class="logout">
                                    <li>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a
                                            >
                                                <img
                                                    src="assets/images/icons/logout.png"
                                                    alt="Logout"
                                                /> Logout
                                            </a>
                                        </form>

                                    </li>
                                </ul>
                            </div>
                            <div class="sidenav__wrapper sidenav__footer">
                                <h6>Last Login</h6>
                                <hr />
                                <div class="sidenav__time">
                                    <p class="secondary"><img src="assets/images/icons/calendar.png" alt="Calendar" />
                                        02.01.2022</p>
                                    <p class="secondary">15:48:13</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div class="main__content">
                            <div class="collapse__sidebar">
                                <h4>Dashboard</h4>
                                <a href="javascript:void(0)" class="collapse__sidebar__btn">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </a>
                            </div>
                            <div class="main__content-dashboard">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="main__content-dashboard__chart">
                                            <div class="balance-report__wrapper dashboard-single__box">
                                                <div class="balance-report">
                                                    <div>
                                                        <h4>€537,00</h4>
                                                        <p class="secondary">Monthly Income</p>
                                                    </div>
                                                    <div class="dashboard-balance-report">
                                                        <select class="select-balance-report">
                                                            <option value="last">Last Month</option>
                                                            <option value="january">January</option>
                                                            <option value="february">February</option>
                                                            <option value="march">March</option>
                                                            <option value="april">April</option>
                                                            <option value="may">May</option>
                                                            <option value="june">June</option>
                                                            <option value="july">July</option>
                                                            <option value="august">August</option>
                                                            <option value="september">September</option>
                                                            <option value="october">October</option>
                                                            <option value="november">November</option>
                                                            <option value="december">December</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="group">
                                                    <div class="group-inner">
                                                        <p>Amount Invested</p>
                                                        <h6><img src="assets/images/icons/invested.png"
                                                                alt="Invested" />€108.934,00</h6>
                                                    </div>
                                                    <div class="group-inner">
                                                        <p>Total Earnings</p>
                                                        <h6><img src="assets/images/icons/earned.png"
                                                                alt="Earned" />€12.606,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashboard-single__box">
                                                <h5 class="investo">Investment Chart</h5>
                                                <div id="investmentChart"></div>
                                            </div>
                                            <div class="dashboard-single__box">
                                                <div class="intro">
                                                    <h5>My Investments</h5>
                                                    <a href="investment.html">Show All<i
                                                            class="fa-solid fa-arrow-right-long"></i></a>
                                                </div>
                                                <div class="property-wrap">
                                                    <div class="poster">
                                                        <a href="investment.html">
                                                            <img src="assets/images/los-two.png" alt="Los Angeles" />
                                                        </a>
                                                    </div>
                                                    <h4><a href="investment.html">Los Angeles</a></h4>
                                                    <p><i class="fa-solid fa-location-dot"></i>8706 Herrick Ave, Los
                                                        Angeles</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="main__content-dashboard__sidebar">
                                            <div class="dashboard-single__box card-alt">
                                                <div class="card-tab-btn__wrapper">
                                                    <a href="#bank" class="card-tab-btn">Bank Account</a>
                                                    <a href="#credit" class="card-tab-btn card-tab-btn-active">Credit
                                                        Card</a>
                                                </div>
                                                <div class="card-tab-wrp" id="bank">
                                                    <div class="card-tab-content">
                                                        <a href="javascipt:void(0)" class="add-card"><i
                                                                class="fa-solid fa-plus"></i></a>
                                                        <div class="card-content">
                                                            <p class="secondary card-no">Card No.</p>
                                                            <p>**** **** **** 4567</p>
                                                            <div class="group">
                                                                <div class="group-inner">
                                                                    <p class="secondary">EXPIRY DATE </p>
                                                                    <p class="secondary">09/24</p>
                                                                </div>
                                                                <div class="group-inner">
                                                                    <p class="secondary">CURRENCY</p>
                                                                    <p class="secondary">USD</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-tab-wrp" id="credit">
                                                    <div class="card-tab-content">
                                                        <a href="javascipt:void(0)" class="add-card"><i
                                                                class="fa-solid fa-plus"></i></a>
                                                        <div class="card-content-slider-wrapper">
                                                            <div class="card-content-slider">
                                                                <div class="card-content-wrapper">
                                                                    <div class="card-content">
                                                                        <p class="secondary card-no">Card No.</p>
                                                                        <p>**** **** **** 4567</p>
                                                                        <div class="group">
                                                                            <div class="group-inner">
                                                                                <p class="secondary">EXPIRY DATE </p>
                                                                                <p class="secondary">09/24</p>
                                                                            </div>
                                                                            <div class="group-inner">
                                                                                <p class="secondary">CURRENCY</p>
                                                                                <p class="secondary">USD</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-content-wrapper">
                                                                    <div class="card-content">
                                                                        <p class="secondary card-no">Card No.</p>
                                                                        <p>**** **** **** 4567</p>
                                                                        <div class="group">
                                                                            <div class="group-inner">
                                                                                <p class="secondary">EXPIRY DATE </p>
                                                                                <p class="secondary">09/24</p>
                                                                            </div>
                                                                            <div class="group-inner">
                                                                                <p class="secondary">CURRENCY</p>
                                                                                <p class="secondary">USD</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-content-wrapper">
                                                                    <div class="card-content">
                                                                        <p class="secondary card-no">Card No.</p>
                                                                        <p>**** **** **** 4567</p>
                                                                        <div class="group">
                                                                            <div class="group-inner">
                                                                                <p class="secondary">EXPIRY DATE </p>
                                                                                <p class="secondary">09/24</p>
                                                                            </div>
                                                                            <div class="group-inner">
                                                                                <p class="secondary">CURRENCY</p>
                                                                                <p class="secondary">USD</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-content-wrapper">
                                                                    <div class="card-content">
                                                                        <p class="secondary card-no">Card No.</p>
                                                                        <p>**** **** **** 4567</p>
                                                                        <div class="group">
                                                                            <div class="group-inner">
                                                                                <p class="secondary">EXPIRY DATE </p>
                                                                                <p class="secondary">09/24</p>
                                                                            </div>
                                                                            <div class="group-inner">
                                                                                <p class="secondary">CURRENCY</p>
                                                                                <p class="secondary">USD</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slider-dots"></div>
                                                </div>
                                            </div>
                                            <div class="dashboard-single__box">
                                                <div class="intro">
                                                    <h5>Last Income</h5>
                                                    <a href="withdraw.html">Show All<i
                                                            class="fa-solid fa-arrow-right-long"></i></a>
                                                </div>
                                                <div class="last-income">
                                                    <div class="group">
                                                        <img src="assets/images/income.png" alt="Last Income" />
                                                        <div>
                                                            <h6>Gerolstein | Am Rasbach 1-17</h6>
                                                            <p class="secondary">18.03.2022</p>
                                                        </div>
                                                    </div>
                                                    <h6>€302,50</h6>
                                                </div>
                                                <div class="last-income">
                                                    <div class="group">
                                                        <img src="assets/images/income.png" alt="Last Income" />
                                                        <div>
                                                            <h6>Gerolstein | Am Rasbach 1-17</h6>
                                                            <p class="secondary">18.03.2022</p>
                                                        </div>
                                                    </div>
                                                    <h6>€302,50</h6>
                                                </div>
                                                <div class="last-income">
                                                    <div class="group">
                                                        <img src="assets/images/income.png" alt="Last Income" />
                                                        <div>
                                                            <h6>Gerolstein | Am Rasbach 1-17</h6>
                                                            <p class="secondary">18.03.2022</p>
                                                        </div>
                                                    </div>
                                                    <h6>€302,50</h6>
                                                </div>
                                            </div>
                                            <div class="dashboard-single__box">
                                                <div class="intro">
                                                    <h5>New Investments</h5>
                                                    <a href="properties.html">Show All<i
                                                            class="fa-solid fa-arrow-right-long"></i></a>
                                                </div>
                                                <div class="new-invest">
                                                    <div class="poster">
                                                        <a href="properties.html">
                                                            <img src="assets/images/san-two.png" alt="San Francisco" />
                                                        </a>
                                                    </div>
                                                    <div class="invest-content">
                                                        <div class="item__head__left">
                                                            <h6>Los Angeles</h6>
                                                            <div class="progress__type progress__type--two">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="project__info">
                                                                    <p class="project__has"><span
                                                                            class="project__has__investors">119
                                                                            Investors</span> | <span
                                                                            class="project__has__investors__amount"><i
                                                                                class="fa-solid fa-dollar-sign"></i>
                                                                            4,94,196</span> <span
                                                                            class="project__has__investors__percent">(54.73%)</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-invest">
                                                    <div class="poster">
                                                        <a href="properties.html">
                                                            <img src="assets/images/san-two.png" alt="San Francisco" />
                                                        </a>
                                                    </div>
                                                    <div class="invest-content">
                                                        <div class="item__head__left">
                                                            <h6>Los Angeles</h6>
                                                            <div class="progress__type progress__type--two">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="project__info">
                                                                    <p class="project__has"><span
                                                                            class="project__has__investors">119
                                                                            Investors</span> | <span
                                                                            class="project__has__investors__amount"><i
                                                                                class="fa-solid fa-dollar-sign"></i>
                                                                            4,94,196</span> <span
                                                                            class="project__has__investors__percent">(54.73%)</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-invest">
                                                    <div class="poster">
                                                        <a href="properties.html">
                                                            <img src="assets/images/san-two.png" alt="San Francisco" />
                                                        </a>
                                                    </div>
                                                    <div class="invest-content">
                                                        <div class="item__head__left">
                                                            <h6>Los Angeles</h6>
                                                            <div class="progress__type progress__type--two">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="project__info">
                                                                    <p class="project__has"><span
                                                                            class="project__has__investors">119
                                                                            Investors</span> | <span
                                                                            class="project__has__investors__amount"><i
                                                                                class="fa-solid fa-dollar-sign"></i>
                                                                            4,94,196</span> <span
                                                                            class="project__has__investors__percent">(54.73%)</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== #dashboard section end ==== -->
    <x-dash-footer />
</x-app-layout>
