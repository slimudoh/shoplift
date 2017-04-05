@extends('layouts.app')
@section('content')
        <div class="demo-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="images/demo.png" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> RESOURCE CENTER
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4" style="height: 100%;">
          <div class="container section4-bg">
            <div class="col-md-12 text-center">
              <h2>RESOURCE CENTER</h2>
            </div>

          <div class="row">
            <div style="width: 90%; margin: 0 auto;">

              <div class="col-md-4" style="padding: 0;">
                <div class="resource-menu">
                  <ul>
                    <li style="background:rgba(0, 0, 0, .6);" id="vec" onclick="openView()">VIEW EXAM CENTERS</li>
                    <li id="fs" onclick="openFee()">FEE & SCHEDULE</li>
                    <li id="er" onclick="openReport()">EXAMINERS REPORT</li>
                    <li id="pqp" onclick="openPapers()">PAST QUESTION PAPERS</li>
                    <li id="sg" onclick="openStudy()">STUDY GROUP</li>
                    <li id="cwoc" onclick="openChat()">CHAT WITH OTHER CANDIDATES</li>
                    <li id="ic" onclick="openCourse()">INTERACTIVE COURSES</li>
                    <li id="gpt" onclick="openTutor()">GET PRIVATE TUTORS</li>
                  </ul>
                </div>
              </div>


              <div class="col-md-8" style="padding: 0;">
                <div class="resource-exam" id="view">
                  <span class="color">EXAMINATION CENTRES</span>
                  <table>                    
                    <thead>
                      <tr>
                        <th>STATE</th>
                        <th>CENTRE</th>
                      </tr>
                    </thead>
                    <tbody>
                                          <tr>
                                            <td>ABA</td>
                                            <td>The New Ultra Modern Chidi Ajaegbu ICAN Centre, Aba</td>
                                         
                                          </tr>
                                          <tr>
                                            <td>ABAKALIKI</td>
                                            <td>Ebonyi State University, Permanent Site, Abakaliki</td>

                                          </tr>
                                          <tr>
                                            <td>ABEOKUTA</td>
                                            <td>Moshood Abiola Polytechnic, Ojere, Abeokuta</td>
                                          </tr>
                                          <tr>
                                            <td>ABUJA</td>
                                            <td> M & M Event Centre, Peace Garden, Plot 900, Herbert Macaulay Way,
                                    International Conference Centre, Abuja</td>
                                    </tr>  
                                          <tr>
                                                <td>ADO-EKITI</td>
                                                <td>Ekiti State University, Sandwish Village, Iworoko Road</td>
                                            </tr>
                                            <tr>
                                                <td>AKURE</td>
                                                <td>ICAN House,Agbaka,Akure. By Government House </td>
                                            </tr>
                                            <tr>
                                                <td>ASABA</td>
                                                <td>College of Education Technical, Permanent Site, Asaba</td>
                                            </tr>
                                            <tr>
                                                <td>AWKA</td>
                                                <td>Paul University, Awka. Main Campus</td>
                                            </tr>
                                            <tr>
                                                <td>BENIN-CITY</td>
                                                <td>Eghosa Anglican Grammar School, New Lagos Rd. Opp. Edo State Post Pry. 
                                                Education Board, by Okhoro    Traffic light, Benin-City.</td>
                                            </tr>
                                            <tr>
                                                <td>CALABAR</td>
                                                <td>Management Development Institute, Mary Slessor Avenue, Calabar</td>
                                            </tr>
                                            <tr>
                                                <td>CAMEROUN</td>
                                                <td>Buea Catholic University, Buea, Cameroun.</td>
                                            </tr>
                                            <tr>
                                                <td>ENUGU</td>
                                                <td>University of Nigeria, Nsukka Enugu Campus, Faculty of Bus. Admin. (FBA) Auditorium, Enugu.</td>
                                            </tr>
                                            <tr>
                                                <td>IBADAN</td>       
                                                <td>Jogor Centre, No.1, Harvester Drive, Off Liberty Stadium Road, Ring Road</td>
                                            </tr>
                                            <tr>
                                                <td>IKEJA </td>
                                                <td>MARTINOS HOTEL, 1, Otunba Jobi Fele Way, Central Business District, by Abiola Garden, Alausa, 
                                                Ikeja, Lagos</td>
                                            </tr>
                                            <tr>
                                                <td>IKORODU</td>
                                                <td>Caleb University KM 15 Ikorodu-Itokin Road, Imota-Ikorodu</td>
                                            </tr>
                                            <tr>
                                                <td>ILESA</td>
                                                <td>Osun State College of Education, Ilesa.</td>
                                            </tr>
                                            <tr>
                                                <td>IKEJA1, LAGOS</td> 
                                                <td>MARTINOS HOTEL, 1, Otunba Jobi Fele Way, Central Business District, by Abiola 
                                                Garden, Alausa, Ikeja, Lagos IKEJA2, LAGOS      -   Memorable Gathering, Plot 15, 
                                                Block C, NERDC Road CBD opposite Tisco Plaza, Alausa, Ikeja, Lagos.</td>
                                            </tr>
                                            <tr>
                                                <td>ILISAN-REMO</td>
                                                <td>Babcock University, Ilisan-Remo.</td>
                                            </tr>
                                            <tr>
                                                <td>ILORIN</td>
                                                <td>Royal Hall, Royal Shekinah Suites, Opposite NNPC MEGA Station, Ajase IPO, Ilorin</td>
                                            </tr>
                                            <tr>
                                                <td>JOS</td>
                                                <td>Twin Theatre Hall, Plateau State Polytechnic, Jos Campus, Jos.</td>
                                            </tr>
                                            <tr>
                                                <td>KADUNA</td>
                                                <td>College of Business & Management Studies (CBMS), Kaduna Polytechnic, Beside Nitel Office, Kaduna.</td>
                                            </tr>
                                            <tr>
                                                <td>KANO</td>
                                                <td>College of Advance and Remedial Studies, Airport Road, Near St. Thomas Secondary School, Kano</td>
                                            </td>      
                                            </tr>                       
                                            <tr>
                                                <td>LAGOS</td>  
                                                <td>University of Lagos Multi-Purpose Hall - Foundation, & Part of Skills candidates.</td>      
                                            </tr>                       
                                            
                                            <tr>
                                                <td>LOKOJA</td>
                                                <td>Federal University Lokoja, Adankolo Campus, Kogi State</td>
                                            </tr>
                                            
                                            <tr>
                                              <td>LONDON</td> 
                                              <td>Lambeth Accord Conference Centre Accord House, 336 Brixton Rd, London SW9 7AA</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>MAIDUGURI</td>
                                                <td>Ramat Polytechnic, Maiduguri</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>MAKURDI</td>
                                                <td>Benue State Library, Makurdi.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>MINNA</td>
                                                <td>Federal University of Technology, Bosso Campus, Minna.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>OGBOMOSO</td>
                                                <td>Ogbomoso Grammar School, Senior, Off Ikirun Road, Paku Hill Ogbomoso 
                                                (Just after the Owode, Divisional Police Station, Owode, Ogbomoso)</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>ONITSHA</td>
                                                <td>Social Centre Secondary School, Awka Road, Onitsha.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>OTA</td>
                                                <td>Bells University of Technology, Ota, Ogun State.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>OWERRI</td> 
                                                <td>Government Secondary School, Okigwe Road, Owerri.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>P/HARCOURT</td>
                                                <td>University of Port-Harcourt Continuing Education Centre, UST Roundabout, 
                                                Oroworukwo Mile 3,     Diobu, Port Harcourt.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>SOKOTO</td>
                                                <td>Conference Hall, University Teaching Hospital Complex, Sokoto.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>UMUAHIA</td>
                                                <td>Michael Okpara University of Agriculture, Umuahia.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>UYO</td>
                                                <td>Modern Secondary Commercial School, 133, Aka Road, Uyo.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>WARRI</td>
                                                <td>College of Education Warri (ETF 2009 Intervention Hall 39). 
                                                YENAGOA -  ICAN Yenagoa & District Society Secretariat, Yenagoa</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>YOLA</td>
                                                <td>Adamawa State Polytechnic, Yola.</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>ZARIA</td>
                                                <td>Kongo Campus, ABU, Zaria</td>
                                            </tr>
                                        </tbody>                    
                    
                    
                  </table>
                </div>

                <div class="resource-fee" id="fee">
                  <span class="color">FEES & SCHEDULE</span>
                  <br><br>
                  <p>
                    <strong>1. </strong> SEPTEMBER-2016-ATSWA
                  </p>
                </div>

                <div class="resource-report" id="report">
                  <span class="color">EXAMINERS REPORT</span>
                  <br><br>
                  <p>
                    <strong>1. </strong> MAY 2015 Foundation Examiners Report
                    <br><br>
                    <strong>2. </strong> MAY 2015 Professional Level Examiners Report
                    <br><br>
                    <strong>3. </strong> Pathfinder NOV 2015 Foundation Level Examiners Preport
                    <br><br>
                    <strong>4. </strong> Pathfinder NOV 2015 Professional Level Examiners Peport
                    <br><br>
                    <strong>5. </strong> Pathfinder NOV 2015 Skills Level Examiners Report
                    <br><br>
                  </p>
                </div>

                <div class="resource-question" id="papers">
                  <span class="color">PAST QUESTION PAPERS</span>
                  <br><br>
                  <p>
                    <strong>1. </strong> 2014 PAST QUESTION PAPERS
                    <br><br>
                    <strong>2. </strong> 2015 PAST QUESTION PAPERS 
                  </p>
                </div>

                <div class="resource-study" id="study">
                  <span class="color">STUDY GROUP</span>
                  <br><br>
                  <p>
                    Lorem ipsum dolor sit amet, graeci ornatus adipiscing an vel, senserit honestatis sea ut. Sed ne zril dolores disputationi, et eum hinc laudem adipiscing, vel utinam discere antiopam ei. Natum essent explicari ei usu, vide denique eloquentiam ne cum, velit aeterno alterum te sed. Per eu cetero utroque, ex ius partem everti complectitur, at sit quas lorem dolor. Commune tractatos sadipscing no eum, no per nusquam gloriatur neglegentur.
                  </p>
                  <div class="buy-btn">
                    <a href="signin.php">
                      <div style="height: 40px;">
                        <div class="buybtn-left">
                          CLICK HERE TO LOGIN
                        </div>
                        <div class="buybtn-right">
                          <img src="images/next.png" alt="">
                        </div> 
                      </div>                                   
                    </a>            
                  </div>
                </div>

                <div class="resource-chat" id="chat">
                  <span class="color">CHAT WITH OTHER CANDIDATES</span>
                  <br><br>
                  <p>
                    Lorem ipsum dolor sit amet, graeci ornatus adipiscing an vel, senserit honestatis sea ut. Sed ne zril dolores disputationi, et eum hinc laudem adipiscing, vel utinam discere antiopam ei. Natum essent explicari ei usu, vide denique eloquentiam ne cum, velit aeterno alterum te sed. Per eu cetero utroque, ex ius partem everti complectitur, at sit quas lorem dolor. Commune tractatos sadipscing no eum, no per nusquam gloriatur neglegentur.
                  </p>
                  <div class="buy-btn">
                    <a href="signin.php">
                      <div style="height: 40px;">
                        <div class="buybtn-left">
                          CLICK HERE TO LOGIN
                        </div>
                        <div class="buybtn-right">
                          <img src="images/next.png" alt="">
                        </div> 
                      </div>                                   
                    </a>            
                  </div>
                </div>

                <div class="resource-course" id="course">
                  <span class="color">INTERACTIVE COURSES</span>
                  <br><br>
                  <p>
                    Lorem ipsum dolor sit amet, graeci ornatus adipiscing an vel, senserit honestatis sea ut. Sed ne zril dolores disputationi, et eum hinc laudem adipiscing, vel utinam discere antiopam ei. Natum essent explicari ei usu, vide denique eloquentiam ne cum, velit aeterno alterum te sed. Per eu cetero utroque, ex ius partem everti complectitur, at sit quas lorem dolor. Commune tractatos sadipscing no eum, no per nusquam gloriatur neglegentur.
                  </p>
                  <div class="buy-btn">
                    <a href="signin.php">
                      <div style="height: 40px;">
                        <div class="buybtn-left">
                          CLICK HERE TO LOGIN
                        </div>
                        <div class="buybtn-right">
                          <img src="images/next.png" alt="">
                        </div> 
                      </div>                                   
                    </a>            
                  </div>
                </div>

                <div class="resource-tutor" id="tutor">
                  <span class="color">GET PRIVATE TUTORS</span>
                  <br><br>
                  <p>
                    Lorem ipsum dolor sit amet, graeci ornatus adipiscing an vel, senserit honestatis sea ut. Sed ne zril dolores disputationi, et eum hinc laudem adipiscing, vel utinam discere antiopam ei. Natum essent explicari ei usu, vide denique eloquentiam ne cum, velit aeterno alterum te sed. Per eu cetero utroque, ex ius partem everti complectitur, at sit quas lorem dolor. Commune tractatos sadipscing no eum, no per nusquam gloriatur neglegentur.
                  </p>
                  <div class="buy-btn">
                    <a href="signin.php">
                      <div style="height: 40px;">
                        <div class="buybtn-left">
                          CLICK HERE TO LOGIN
                        </div>
                        <div class="buybtn-right">
                          <img src="images/next.png" alt="">
                        </div> 
                      </div>                                   
                    </a>            
                  </div>
                </div>

              </div>

            </div>         
          </div>

        </div>
      </div>

      
@endsection