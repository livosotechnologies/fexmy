<style>
    .alert-message {
        position: fixed;
        top: 20px;
        /* Adjust top position as needed */
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        z-index: 1000;
    }
</style>

@if(session('success'))
<div id="success-message" class="alert alert-success alert-message" role="alert">
    {{ session('success') }}
</div>
<script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 3000);
</script>
@endif



<form action="/contact/store" id="contact-form" method="POST" class="contact-form-items">
    @csrf
    <div class="row g-4">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">
                <span>Full name*</span>
                <input class="from-control" type="text" name="firstname" placeholder="Full Name" required="">
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt">
                <span>Phone Number*</span>
                <input class="from-control" type="tel" name="phone" placeholder="Phone Number" required="">
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">
                <span>Email*</span>
                <input class="from-control" type="email" name="email" placeholder="E-Mail" required="">
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">

            <select class="from-control" name="chooseConsultation"  required="">
               
                    <option value="Business Planning">Business Setup</option>
                    <option value="Financial Advice">Corporate Services</option>
                    <option value="Insurance Strategy">General Enquiry</option>
                    <option value="Professional License">Professional License</option>
                    <option value="Commercial License">Commercial License</option>
                    <option value="Insurance Strategy">Industrial License</option>
                    <option value="LLC Formation">LLC Formation</option>
                    <option value="PRO Services">PRO Services</option>
                    <option value="VISA">VISA</option>
                    <option value="Bank Account">Bank Account</option>
                    <option value="VAT registration">VAT registration</option>
                    <option value="Trademark Registration">Trademark Registration</option>
                    <option value="Auditing services">Auditing services</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">

            <select class="from-control" name="lastname" required="">
                    <option value="Want to Start Your Business">Want to Start Your Business</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="Singapore">Singapore</option>
                </select>
            </div>
        </div>
      
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">

                <select class="from-control" name="nationality" required="">
                    <option value="unknown">Select Nationlity</option>
                    <option value="afghan">Afghan</option>
                    <option value="albanian">Albanian</option>
                    <option value="algerian">Algerian</option>
                    <option value="american">American</option>
                    <option value="argentinian">Argentinian</option>
                    <option value="australian">Australian</option>
                    <option value="austrian">Austrian</option>
                    <option value="bangladeshi">Bangladeshi</option>
                    <option value="belgian">Belgian</option>
                    <option value="brazilian">Brazilian</option>
                    <option value="british">British</option>
                    <option value="bulgarian">Bulgarian</option>
                    <option value="canadian">Canadian</option>
                    <option value="chilean">Chilean</option>
                    <option value="chinese">Chinese</option>
                    <option value="colombian">Colombian</option>
                    <option value="croatian">Croatian</option>
                    <option value="czech">Czech</option>
                    <option value="danish">Danish</option>
                    <option value="dutch">Dutch</option>
                    <option value="egyptian">Egyptian</option>
                    <option value="english">English</option>
                    <option value="emirati">Emirati</option>
                    <option value="estonian">Estonian</option>
                    <option value="ethiopian">Ethiopian</option>
                    <option value="filipino">Filipino</option>
                    <option value="finnish">Finnish</option>
                    <option value="french">French</option>
                    <option value="german">German</option>
                    <option value="ghanaian">Ghanaian</option>
                    <option value="greek">Greek</option>
                    <option value="guatemalan">Guatemalan</option>
                    <option value="haitian">Haitian</option>
                    <option value="honduran">Honduran</option>
                    <option value="hungarian">Hungarian</option>
                    <option value="icelandic">Icelandic</option>
                    <option value="indian">Indian</option>
                    <option value="indonesian">Indonesian</option>
                    <option value="iranian">Iranian</option>
                    <option value="iraqi">Iraqi</option>
                    <option value="irish">Irish</option>
                    <option value="israeli">Israeli</option>
                    <option value="italian">Italian</option>
                    <option value="jamaican">Jamaican</option>
                    <option value="japanese">Japanese</option>
                    <option value="jordanian">Jordanian</option>
                    <option value="kenyan">Kenyan</option>
                    <option value="korean">Korean</option>
                    <option value="kuwaiti">Kuwaiti</option>
                    <option value="latvian">Latvian</option>
                    <option value="lebanese">Lebanese</option>
                    <option value="liberian">Liberian</option>
                    <option value="libyan">Libyan</option>
                    <option value="lithuanian">Lithuanian</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="malian">Malian</option>
                    <option value="maltese">Maltese</option>
                    <option value="mexican">Mexican</option>
                    <option value="moroccan">Moroccan</option>
                    <option value="nepali">Nepali</option>
                    <option value="new zealander">New Zealander</option>
                    <option value="nigerian">Nigerian</option>
                    <option value="norwegian">Norwegian</option>
                    <option value="pakistani">Pakistani</option>
                    <option value="panamanian">Panamanian</option>
                    <option value="peruvian">Peruvian</option>
                    <option value="polish">Polish</option>
                    <option value="portuguese">Portuguese</option>
                    <option value="qatari">Qatari</option>
                    <option value="romanian">Romanian</option>
                    <option value="russian">Russian</option>
                    <option value="saudi">Saudi</option>
                    <option value="scottish">Scottish</option>
                    <option value="senegalese">Senegalese</option>
                    <option value="serbian">Serbian</option>
                    <option value="singaporean">Singaporean</option>
                    <option value="slovak">Slovak</option>
                    <option value="slovenian">Slovenian</option>
                    <option value="somali">Somali</option>
                    <option value="south african">South African</option>
                    <option value="spanish">Spanish</option>
                    <option value="sri lankan">Sri Lankan</option>
                    <option value="sudanese">Sudanese</option>
                    <option value="swedish">Swedish</option>
                    <option value="swiss">Swiss</option>
                    <option value="syrian">Syrian</option>
                    <option value="taiwanese">Taiwanese</option>
                    <option value="tajik">Tajik</option>
                    <option value="tanzanian">Tanzanian</option>
                    <option value="thai">Thai</option>
                    <option value="tunisian">Tunisian</option>
                    <option value="turkish">Turkish</option>
                    <option value="ugandan">Ugandan</option>
                    <option value="ukrainian">Ukrainian</option>
                    <option value="uruguayan">Uruguayan</option>
                    <option value="uzbek">Uzbek</option>
                    <option value="venezuelan">Venezuelan</option>
                    <option value="vietnamese">Vietnamese</option>
                    <option value="welsh">Welsh</option>
                    <option value="yemeni">Yemeni</option>
                    <option value="zambian">Zambian</option>
                    <option value="zimbabwean">Zimbabwean</option>
                </select>
            </div>
        </div>

        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
            <div class="form-clt">
                <span>Write Message*</span>
                <textarea name="message" id="message"
                    placeholder="Write Message"></textarea>
            </div>
        </div>
        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
            <button type="submit" class="theme-btn">
                Send Message <i class="fa-solid fa-arrow-right-long"></i>
            </button>
        </div>
    </div>
</form>