<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js"></script>
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
        <form action="{{route('contact.post')}}" method="POST">
         @csrf
         @method('POST')
         <label for="fn">First Name*</label>
         <input type="text" name="fn">
         @error('fn')
         <p style="color: red;font-size:10px">{{$message}}</p>
         @enderror
         <label for="ln">Last Name*</label>
         <input type="text" name="ln">
         @error('ln')
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
        <div class="container-map" >
            <!-- First Map -->
            <div class="first-map" style="flex: 1; height: 300px;">
                <div class="map-container">
                    <div id="main-branch-map-1" style="width: 100%; height: 100%;"></div>
                </div>
                <div class="branch-desc">
                    <p>Main Branch</p>
                    <p>Al-Sadd, Doha, Qatar</p>
                </div>
            </div>
            
            <!-- Second Map -->
            <div class="second-map" style="flex: 1; height: 300px;">
                <div class="map-container" >
                    <div id="main-branch-map-2" style="width: 100%; height: 100%;"></div>
                </div>
                <div class="branch-desc">
                    <p>Second Branch</p>
                    <p>Fox-Hills, Lusail City, Qatar</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // phone flag script
        document.addEventListener('DOMContentLoaded', function() {
                 const phoneInputField = document.querySelector("#phone");
                 const hiddenPhoneField = document.querySelector("#hidden-phone");
                 // Initialize intl-tel-input
                 const phoneInput = window.intlTelInput(phoneInputField, {
                     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                 });
           
                 
                 const form = document.querySelector('#phone-form');
                 form.addEventListener('submit', function(event) {
                    
                     const countryCode = phoneInput.getSelectedCountryData().dialCode;
                     const phoneNumber = countryCode.getNumber();
           
                     phoneInputField.value = phoneNumber;
                
                 });
             });
    
             /// map1 main branch
             const map1 = L.map('main-branch-map-1', {
             center: [25.280477, 51.495923],
             zoom: 15,
             zoomControl: false,
           });
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map1);
    
    L.control.zoom({
      position: 'bottomright',
    }).addTo(map1);
    
    L.marker([25.280477, 51.495923])
      .addTo(map1)
      .bindPopup(`
          <b>Steps Real Estate</b><br>
          Al Sadd, Qatar<br>
          <a href="https://www.google.com/maps?q=25.280477,51.495923" target="_blank">View Larger Map</a>
      `)
      .openPopup();
    
         /// map2 second branch
        const map2 = L.map('main-branch-map-2', {
          center: [ 25.276869, 51.550618],
          zoom: 15,
          zoomControl: false,
        });
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map2);
    
    L.control.zoom({
      position: 'bottomright',
    }).addTo(map2);
    
    L.marker([ 25.276869, 51.550618])
      .addTo(map2)
      .bindPopup(`
          <b>Steps Real Estate(Lusail)</b><br>
          Lusail, Qatar<br>
          <a href="https://www.google.com/maps?q=25.276869,51.550618" target="_blank">View Larger Map</a>
      `)
      .openPopup();
    
    </script>

</body>
</html>