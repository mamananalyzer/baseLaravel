@extends('layout/base')

@section('title', 'Aculink 810')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/aculink810.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <hr>
            </div>
          </div>
        </div>

        <div class="accordion col-md-6" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="black">
                            <h2>Data Acquisition Server</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>AcuLink 810</h2>
                        <hr>
                        <br>
                        <p>Accuenergy’s AcuLink 810 is a data acquisition server and gateway designed to collect aggregated energy data from up to 32 Modbus meters and field sensors in a facility such as water, gas and electricity. This information is locally stored until it is ready to be distributed to remote servers or controllers via an IP-based network</p>
                        <p>AcuLink 810 provides an easy solution to manage, collect and store data from all connected metering points from a single web interface.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3>New Feature Data Acquisition</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul class="font-weight-bold">
                                <li>Added MQTT protocol, a new data integration protocol for IoT applications</li>
                                <li>Support reading SunSpec devices. Simplified integration with any SunSpec supported meters and inverters</li>
                                <li>Data Acquisition via BACnet-IP. Now supports four acquisition protocols: Modbus-RTU (standard + SunSpec), Modbus-TCP/IP, BACnet-MS/TP and BACnet-IP</li>
                                <li>Rapid logger. Log data in 1-second interval (previously support 1-minute interval)</li>
                                <li>Support building BACnet device template by converting EPICS file</li>
                                <li>Pulse counter data can be polled via Modbus-TCP and BACnet-IP directly</li>
                            </ul>
                            <ul>
                                <li>BACnet-MSTP data acquisition</li>
                                <li>AcuMesh support on AcuLink 810 (Wirelessly query meters with RS485)</li>
                                <li>BACnet gateway (Convert Modbus-RTU and BACnet-MSTP to BACnet-IP)</li>
                                <li>Remote device access</li>
                                <li>Maintain high availability by RSTP protocol (two ports connect to same subnet)</li>
                                <li>Ethernet gateway for Modbus RS485 and digital output devices</li>
                                <li>Access energy information remotely via web server, or push to IP-based master devices or software</li>
                                <li>Data acquisition and logging with 8GB on-board memory</li>
                                <li>Embedded web-server for real-time data and easy configurations</li>
                                <li>Controller/Master system can poll data from all RTU devices via Modbus-TCP/IP Protocol</li>
                                <li>Dual ethernet RJ45 port and WiFi communication channels</li>
                                <li>Enhanced cybersecurity for critical infrastructure deployment</li>
                                <li>Compact DIN rail mount design</li>
                                <li>Track energy usage and peak demand</li>
                                <li>Quick and simple software-free setup</li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card-body grey">
                    <div class="row">
                        <div class="col-1">
                            <object data="img/download.svg" type="img/download.svg">
                                <img src="img/download.svg"/>
                            </object>
                        </div>
                        <div class="col-4">
                            <h6>Downloads :</h6>
                        </div>
                    </div>
                    <a href="https://www.accuenergy.com/wp-content/uploads/AcuLink-810-data-aquisition-server-brochure.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Aculink810-Manual.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
