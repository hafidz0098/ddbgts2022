<div>
    <div><!-- [if !mso]><!-- --> <!--<![endif]--></div>
  </div>
  <style>#outlook a { padding: 0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .ExternalClass * { line-height:100%; }
    body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
    p { display: block; margin: 13px 0; }</style>
  <div>
    <div></div>
  </div>
  <style>@media only screen and (max-width:480px) {
      @-ms-viewport { width:320px; }
      @viewport { width:320px; }
    }</style>
  <div>
    <div></div>
  </div>
  <style>@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style>
  <div>
    <div></div>
  </div>
  <style>@media only screen and (min-width:480px) {
      .mj-column-per-100, * [aria-labelledby="mj-column-per-100"] { width:100%!important; }
    }</style>
  <div>
    <div>
      <div style="background-color: #f9f9f9;"></div>
    </div>
  </div>
  <style>html, body, * {
        -webkit-text-size-adjust: none;
        text-size-adjust: none;
      }
      a {
        color:#1EB0F4;
        text-decoration:none;
      }
      a:hover {
        text-decoration:underline;
      }</style>
  <div>
    <div style="background-color: #f9f9f9;">
      <div style="margin: 0px auto; max-width: 640px; background: transparent;">
        <table style="font-size: 0px; width: 100%; background: transparent;" role="presentation" border="0" cellspacing="0" cellpadding="0" align="center">
          <tbody>
            <tr>
              <td style="text-align: center; vertical-align: top; direction: ltr; font-size: 0px; padding: 40px 0px;">
                <div class="mj-column-per-100 outlook-group-fix" style="vertical-align: top; display: inline-block; direction: ltr; font-size: 13px; text-align: left; width: 100%;" aria-labelledby="mj-column-per-100">
                  <br>
                  <table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td style="word-break: break-word; font-size: 0px; padding: 0px;" align="center">&nbsp; &nbsp; &nbsp;&nbsp;
                          <table style="border-collapse: collapse; border-spacing: 0px;" role="presentation" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td style="width: 138px;">
                                  <a href="#" target="_blank" rel="noopener">
                                    <img style="border: none; outline: none; text-decoration: none; width: 78px; height: 74px; display: block; margin-left: auto; margin-right: auto;" title="" src="https://i.ibb.co/6Yj1hMF/50778727273-eeb43e1157-c-removebg-preview.png" alt="" width="138" height="38px">
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="max-width: 640px; margin: 0 auto; box-shadow: 0px 1px 5px rgba(0,0,0,0.1); border-radius: 4px; overflow: hidden;">
        <div style="margin: 0px auto; max-width: 640px; background: #ffffff;">
          <table style="font-size: 0px; width: 100%; background: #ffffff;" role="presentation" border="0" cellspacing="0" cellpadding="0" align="center">
            <tbody>
              <tr>
                <td style="text-align: center; vertical-align: top; direction: ltr; font-size: 0px; padding: 40px 50px;">
                  <div class="mj-column-per-100 outlook-group-fix" style="vertical-align: top; display: inline-block; direction: ltr; font-size: 13px; text-align: left; width: 100%;" aria-labelledby="mj-column-per-100">
                    <table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td style="word-break: break-word; font-size: 0px; padding: 0px;" align="left">
                            <div style="cursor: auto; color: #737f8d; font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif; font-size: 16px; line-height: 24px; text-align: left;">
                              <h2 style="font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif; font-weight: 500; font-size: 20px; color: #4f545c; letter-spacing: 0.27px;">Halo 
                                <strong>{{ $nama_peserta }}</strong>,
                              </h2>
                              <p> {{ $pesan }}</p>
                              @component('mail::table')
                                |                       |               |                        |
                                | ----------------------| :------------:| ----------------------:|
                                | Mata Acara            | :             | {{$nama_acara}}        |
                                | Tanggal               | :             | {{$tanggal}}           |
                                | Jam                   | :             | {{$jam}}               |
                                | Lokasi                | :             | {{$lokasi}}            |
                                | Zoom Meeting ID       | :             | {{$meeting_id}}        |
                                | Zoom Meeting Passcode | :             | {{$meeting_passcode}}  |
                              @endcomponent
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td style="word-break: break-word; font-size: 0px; padding: 10px 25px; padding-top: 20px;" align="center">
                            <table style="border-collapse: separate;" role="presentation" border="0" cellspacing="0" cellpadding="0" align="center">
                              <tbody>
                                <tr>
                                  <td style="border: none; border-radius: 3px; color: white; cursor: auto; padding: 15px 19px;" align="center" valign="middle" bgcolor="#5865f2">
                                    <a href={{ $link_zoom }} style="text-decoration: none; line-height: 100%; background: #5865f2; color: white; font-family: Ubuntu, Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; text-transform: none; margin: 0px;" target="_blank" rel="noopener">Join Zoom Meeting</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td style="word-break: break-word; font-size: 0px; padding: 30px 0px;">
                            <p style="font-size: 1px; margin: 0px auto; border-top: 1px solid #DCDDDE; width: 100%;">&nbsp;</p>
                          </td>
                        </tr>
                        <tr>
                          <td style="word-break: break-word; font-size: 0px; padding: 0px;" align="left">
                            <div style="cursor: auto; color: #747f8d; font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif; font-size: 13px; line-height: 16px; text-align: left;">
                              <p>Butuh bantuan? Silahkan hubungi kami via DM Instagram 
                                <a href="https://www.instagram.com/ddbgts/">@ddbgts</a>
                                <br>
                              </p>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div style="margin: 0px auto; max-width: 640px; background: transparent;">
        <table style="font-size: 0px; width: 100%; background: transparent;" role="presentation" border="0" cellspacing="0" cellpadding="0" align="center">
          <tbody>
            <tr>
              <td style="text-align: center; vertical-align: top; direction: ltr; font-size: 0px; padding: 20px 0px;">
                <div class="mj-column-per-100 outlook-group-fix" style="vertical-align: top; display: inline-block; direction: ltr; font-size: 13px; text-align: left; width: 100%;" aria-labelledby="mj-column-per-100">
                  <table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td style="word-break: break-word; font-size: 0px; padding: 0px;" align="center">
                          <div style="cursor: auto; color: #99aab5; font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif; font-size: 12px; line-height: 24px; text-align: center;">Made By PIT DDBGTS 2022</div>
                        </td>
                      </tr>
                      <tr>
                        <td style="word-break: break-word; font-size: 0px; padding: 0px;" align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style="word-break: break-word; font-size: 0px; padding: 0px;" align="left">
                          <div style="cursor: auto; color: #000000; font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif; font-size: 13px; line-height: 22px; text-align: left;">
                            <img src="#" width="1" height="1">
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <img style="height: 1px !important; width: 1px !important; border-width: 0 !important; padding: 0 !important; margin: 0 !important;" src="#" alt="" width="1" height="1" border="0">
  </div>
  