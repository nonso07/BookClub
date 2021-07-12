
<div class="container bootdey">
    <div class="row invoice row-printable">
        <div class="col-md-10">
            <!-- col-lg-12 start here -->
            <div class="panel panel-default plain" id="dash_0">
                <!-- Start .panel -->
                <div class="panel-body p30">
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-6"> <img src="">
                            <!-- col-lg-6 start here -->
                            <div class="invoice-logo"><img width="100" src="assets/img/unn2_logo.jpg" alt="gaplink Logo"></div>
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-6">
                            <!-- col-lg-6 start here -->
                            <div class="invoice-from">
                                <ul class="list-unstyled text-right">
                                    <li>Department of Computer Science.</li>
                                    <li>University of Nigeria, Nsukka</li>
                                    <li>Enugu, Enugu State</li>
                                    <li>Nigeria</li>
                                </ul>
                            </div>
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="invoice-details mt25">
                                <div class="well">
                                    <ul class="list-unstyled mb0">
                                        <li><strong>Recpit ID </strong># {{$recipetDetails[0]->trans_id}} </li>
                                        <li><strong>Payment Date:</strong> {{ date("F d, Y", strtotime($recipetDetails[0]->created_at)) }}</li>
                                        <li><strong>Payment Plan:</strong> {{$recipetDetails[0]->Receipt_plan}}</li>
                                        <li><strong>Status:</strong> <span class="badge bg-success">PAID</span> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="invoice-to mt25">
                                <ul class="list-unstyled">
                                    <li><strong>Receipt To</strong></li>
                                    <li>{{$recipetDetails[0]->first_name}},  {{$recipetDetails[0]->last_name}}</li>
                                    <li> {{$recipetDetails[0]->email}} </li>
                                    <li> (+234) {{$recipetDetails[0]->phoneNum}} </li>
                                    <li>{{$recipetDetails[0]->address}}</li>                       
                                    
                                </ul>
                            </div>
                            <div class="invoice-items">
                                <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="per70 text-center">Description</th>
                                                {{--<th class="per5 text-center">Qty</th>--}}
                                                <th class="per25 text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>One time non refundable activation fee to gain full accesses to our {{$recipetDetails[0]->Receipt_plan}} services</td>
                                                {{--<td class="text-center">1</td>--}}
                                                <td class="text-center">&#8358 {{($recipetDetails[0]->amount- $recipetDetails[0]->fees)*0.01}}</td>
                                            </tr>
                                            <tr>
                                                <td>Network services charges </td>
                                                {{--<td class="text-center">1</td>--}}
                                                <td class="text-center">&#8358 {{$recipetDetails[0]->fees*0.01}} </td>
                                            </tr>
                                            {{--<tr>
                                                <td>Backup - 1024MB Cloud 2.0 Server - elisium.dynamic.com</td>
                                                {{--<td class="text-center">12</td>-}}
                                                <td class="text-center">$12.00 USD</td>
                                            </tr> --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2" class="text-right">Sub Total:</th>
                                                <th class="text-center">&#8358 {{$recipetDetails[0]->amount*0.01}} </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-right">20% VAT:</th>
                                                <th class="text-center">&#8358 {{$recipetDetails[0]->amount*0.0002}}</th>
                                            </tr>
                                            
                                            <tr>
                                                <th colspan="2" class="text-right">Total:</th>
                                                <th class="text-center">&#8358 {{$recipetDetails[0]->amount*0.01}} </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-footer mt25">
                                   <p class="text-center">Generated on {{date("l jS \of F Y h:i:s A", strtotime($current ))}}  <a href="/pdfpreview" class="btn btn-default ml15"><i class="fa fa-print mr5"></i> Preview</a>  @if($pdfConver) <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a> @endif </p>
                            </div>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <!-- End .row -->
                </div>
            </div>
            <!-- End .panel -->
        </div>
        <!-- col-lg-12 end here -->
    </div>
    </div>
