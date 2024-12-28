<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    {{-- @vite('resources/css/app.css') --}}
    <title>Contact Us</title>
</head>
<body>
    <x-navbar/>
    @if(session()->has('success'))
    <p style="width: 100vw;padding:5px;text-align:center;color:#fff;background-color:green;">
        {{ session('success') }}
    </p>
@endif
    {{-- section image --}}
    <section class="sectionimg">
        <div class="contact">
           <h1>Contact Us</h1>
           <div>
              <a href="/" style="color:#fff">Home</a>
              <span style="color: #fff">&gt;</span> <a href="/contact" style="color:rgb(242, 131, 52);font-weight:500;">Contact Us</a>
           </div>
        </div>
       </section>
       {{-- section grid form with contact details --}}
       <section class="contactdetails">
        <div class="left-container">
        <form action="{{route('contact.post')}}" method="POST" id="phone-form">
         @csrf
         @method('POST')
         <label for="firstname">First Name*</label>
         <input type="text" name="firstname">
         @error('firstname')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <label for="lastname">Last Name*</label>
         <input type="text" name="lastname">
         @error('lastname')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <label for="email">Email*</label>
         <input type="text" name="email">
         @error('email')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <label for="phone">Phone Number*</label>
         <input id="phone" type="tel" name="phone" />
         @error('phone')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <label for="inquiry">Inquiry type*</label>
         <select name="inquiry" id="inquiry">
            <option value="investor">Iam an Investor</option>
            <option value="partner">Iam a Partner</option>
            <option value="developer">Iam a developer</option>
            <option value="tenant">Iam a tenant</option>
         </select>
         @error('inquiry')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <label for="description">Additional info</label>
         <textarea type="text" name="description" id="description" rows="2"></textarea>
         @error('description')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <button type="submit">Submit</button>
        </form>

        </div>
        <div class="divider"></div>
        <div class="right-container">
           <div class="first-table">
            <h3>Contact Details</h3>
            <table>
                <tbody>
                    <tr>
                        <td>Lusail office:</td>
                        <td style="font-weight: 600;">+974 4039 2558</td>
                    </tr>
                    <tr>
                        <td>Al-Sadd office:</td>
                        <td style="font-weight: 600;">+974 4468 7461</td>
                    </tr>
                    <tr>
                        <td>Mobile:</td>
                        <td style="font-weight: 600;">+974 6634 6605</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td style="font-weight: 600;"><a href="mailto:contact@steps.com.qa" target="_blank">contact@steps.com.qa</a></td>
                    </tr>
                </tbody>
            </table>
           </div>
           <div class="second-table">
            <h3>Working Hours</h3>
            <p>Our Call Center is Operational 7 days a week for your service.</p>
            <table>
                <thead>
                    <tr>
                        <th>Days</th>
                        <th>Lusail Office</th>
                        <th>Al-Sadd Office</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>9 Am to 7 Pm</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>9 Am to 7 Pm</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                    <tr>
                        <td>wednesday</td>
                        <td>9 Am to 7 Pm</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>9 Am to 7 Pm</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td style="text-align: center">--</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>9 Am to 7 Pm</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>9 Am to 7 Pm</td>
                        <td>9 Am to 6 Pm</td>
                    </tr>
                </tbody>
            </table>
           </div>
        </div>
       </section>
       {{-- maps --}}
       <section class="maps">
        <h1>Find Us</h1>
        <div class="container-map" style="width: 100%;height: 400px" >
            <!-- First Map -->
            <div class="first-map" style="flex: 1; ">
                <div class="map-container">
                    <div  style="width: 100%;z-index:10;">
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.6646759896194!2d51.49245447484024!3d25.281863228267284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45dab1652528ff%3A0xc2413c367163c185!2sSteps%20Real%20Estate!5e0!3m2!1sen!2slb!4v1735371142237!5m2!1sen!2slb"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="branch-desc" style="margin-top: 37px;">
                    <p>Main Branch</p>
                    <p>Al-Sadd, Doha, Qatar</p>
                </div>
            </div>
            
            <!-- Second Map -->
            <div class="second-map" style="flex: 1;">
                <div class="map-container" >
                    <div  style="width: 100%;z-index:10;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.8448723799393!2d51.50100577846305!3d25.410002765248176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45ddb3a8a0362b%3A0x2a9104fa4eba4f67!2sSteps%20Real%20Estate%20(Lusail)!5e0!3m2!1sen!2slb!4v1735372119296!5m2!1sen!2slb"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="branch-desc" style="margin-top: 37px;">
                    <p>Second Branch</p>
                    <p>Fox-Hills, Lusail City, Qatar</p>
                </div>
            </div>
        </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const phoneInputField = document.querySelector("#phone");

        // Initialize intl-tel-input
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        // fetching flag upon ip address
        fetch('http://ip-api.com/json/')
.then(response => response.json())
.then(data => {
    const country = data.countryCode; 
 
        phoneInput.setCountry(data.countryCode); 
})
.catch(error => console.error('Error fetching location:', error));

        const form = document.querySelector('#phone-form');
        form.addEventListener('submit', function (eo) {
            eo.preventDefault();


            const countryCode = phoneInput.getSelectedCountryData().dialCode;
            const phoneNumber = phoneInput.getNumber(); 

            
            const countryCodeInput = document.createElement('input');
            countryCodeInput.type = 'hidden';
            countryCodeInput.name = 'country_code';
            countryCodeInput.value = countryCode;
            form.appendChild(countryCodeInput);

            phoneInputField.value = phoneNumber;

            form.submit();
        });
    });
    
    </script>

</body>
</html>