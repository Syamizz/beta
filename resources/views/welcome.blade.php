@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Events') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Start_Module_330 -->
                                <table id="_ctl3__ctl7_ModuleContent" cellpadding="0" cellspacing="0" border="0"
                                    width="100%">
                                    <tr>
                                        <td>

                                            <table id="calEvents" class="Normal" cellspacing="0" cellpadding="2"
                                                summary="Events Calendar Design Table" border="0">
                                                <tr>
                                                    <td colspan="7" bgcolor="Silver">
                                                        <table class="Normal" cellspacing="0" border="0"
                                                            width="100%">
                                                            <tr>
                                                                <td class="NormalBold" width="15%"><b><a
                                                                            href="javascript:__doPostBack('_ctl3$_ctl7$_ctl0$calEvents','V8126')"
                                                                            style="color:Black">&lt;</a></b></td>
                                                                <td align="Center" width="70%"><b>May 2022</b></td>
                                                                <td class="NormalBold" align="Right" width="15%"><b><a
                                                                            href="javascript:__doPostBack('_ctl3$_ctl7$_ctl0$calEvents','V8187')"
                                                                            style="color:Black">&gt;</a></b></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Mon</td>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Tue</td>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Wed</td>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Thu</td>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Fri</td>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Sat</td>
                                                    <td class="NormalBold" align="Center" bgcolor="#EEEEEE">Sun</td>
                                                </tr>
                                                <tr>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">25</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">26</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">27</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">28</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">29</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">30</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        1<span></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        2<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        3<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        4<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        5<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        6<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        7<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        8<span></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        9<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        10<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        11<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        12<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        13<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        14<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        15<span></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        16<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        17<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        18<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        19<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        20<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        21<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        22<span></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        23<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        24<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        25<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        26<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        27<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        28<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        29<span></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        30<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        31<span></span></td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">1</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">2</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">3</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">4</font>
                                                    </td>
                                                    <td class="Normal" align="Center" valign="Top" width="14%">
                                                        <font color="White">5</font>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- End_Module_330 -->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Selamat Datang') }}</div>
                    <div class="card-body text-center">
                        <h2>TOTAL CO-OPERATIVE INFORMATION SYSTEM</h2>
                        <h2>(TCIS)</h2>
                        <img src="{{ asset('resources/photo/ixs_banner.jpg') }}" alt="inter xs" width="80%">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
