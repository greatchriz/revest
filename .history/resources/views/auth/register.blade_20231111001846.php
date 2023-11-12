<x-app-layout>
    <x-auth-header />
        <!-- ==== registration section start ==== -->
        <section class="registration clear__top">
            <div class="container">
                <div class="registration__area">
                    <h4 class="neutral-top">Registration</h4>
                    <p>Already Registered? <a href="/login">Login</a></p>
                    <form action="#" method="post" name="registration__form">
                        <div class="regi__type">
                            <label for="typeSelect">You are?</label>
                            <select class="type__select" id="typeSelect">
                                <option value="particular">Particular</option>
                                <option value="individual">Individual</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input input--secondary">
                                    <label for="firstName">First Name*</label>
                                    <input type="text" name="first__name" id="firstName" placeholder="First Name"
                                        required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input input--secondary">
                                    <label for="lastName">Last Name*</label>
                                    <input type="text" name="last__name" id="lastName" placeholder="Last Name"
                                        required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="input input--secondary">
                            <label for="registrationMail">Email*</label>
                            <input type="email" name="registration__email" id="registrationMail"
                                placeholder="Enter your email" required="required" />
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input input--secondary">
                                    <label for="regiPass">Password*</label>
                                    <input type="password" name="regi__pass" id="regiPass" placeholder="Password"
                                        required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input input--secondary">
                                    <label for="passCon">Password Confirmation*</label>
                                    <input type="password" name="pass__con" id="passCon" placeholder="Password Confirm"
                                        required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="condtion" name="accept__condition" value="agree" />
                                <span class="checkmark"></span>
                                I have read and I agree to the <a href="key-risks.html">
                                    Privacy Policy</a>
                            </label>
                        </div>
                        <div class="input__button">
                            <button type="submit" class="button button--effect">Create My Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- ==== #registration section end ==== -->
    <x-auth-footer />
</x-app-layout>
