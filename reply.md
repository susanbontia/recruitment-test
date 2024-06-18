YOUR RESPONSE GOES HERE

Hi Alice,

Thank you for your email.

Upon investigation, I noticed a discrepancy between the domain and IP address you provided.
The domain site.recruitment.shq.nz does not match the IP address 120.138.30.179 that you mentioned.

Using the dig command (dig site.recruitment.shq.nz), I retrieved the following information:

; <<>> DiG 9.10.6 <<>> site.recruitment.shq.nz
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 9202
;; flags: qr rd ra; QUERY: 1, ANSWER: 1, AUTHORITY: 0, ADDITIONAL: 1

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 1232
;; QUESTION SECTION:
;site.recruitment.shq.nz. IN A

;; ANSWER SECTION:
site.recruitment.shq.nz. 3600 IN A 192.168.1.10

;; Query time: 11 msec
;; SERVER: 172.150.10.1#53(172.150.10.1)
;; WHEN: Fri Jun 14 18:04:04 NZST 2024
;; MSG SIZE rcvd: 68

For the IP address 120.138.30.179, the dig command returned:

; <<>> DiG 9.10.6 <<>> 120.138.30.179
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NXDOMAIN, id: 39197
;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 1, ADDITIONAL: 1

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 1232
;; QUESTION SECTION:
;120.138.30.179. IN A

;; AUTHORITY SECTION:
. 1810 IN SOA a.root-servers.net. nstld.verisign-grs.com. 2024061400 1800 900 604800 86400

;; Query time: 11 msec
;; SERVER: 172.150.10.1#53(172.150.10.1)
;; WHEN: Fri Jun 14 18:19:20 NZST 2024
;; MSG SIZE rcvd: 118

Solution:

1. Verify DNS Records:

- Ensure that the DNS records for site.recruitment.shq.nz are correctly configured. Check if the A record is pointing to the intended IP address 120.138.30.179.

2. Check DNS Configuration:

- Confirm that there are no conflicting DNS entries. Sometimes, subdomains might have different DNS configurations that can lead to such discrepancies.

3. Contact Your DNS Provider:

- If the issue persists, contact your DNS hosting provider to ensure there are no underlying issues or misconfigurations.

Please let me know if you need further assistance or if there are any other details you can provide.

Kind Regards,
Susan Bontia

Hi SiteHost Team,

I opened the site for the IP address 120.138.30.179 and viewed its source.
Unfortunately, I was not able to retrieve the code hidden in an HTML comment in the <head> section.
Here is what I found in the HTML <head> section:

<head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website Not Found &ndash; SiteHost</title>

        <style>
        	html {
        		padding: 0 20px;
        	}

        	body {
        		font-size: 18px;
        		max-width: 620px;
        		line-height: 1.6em;
        		margin: 10% auto 0 auto;
        		font-family: 'Helvetica Neue', Arial, sans-serif;
        	}

        	a {
        		color: #159ADF;
        	}

    				.logo {
    					width: 200px;
    					display: block;
    					margin-bottom: 30px;
    				}

    					.logo img {
    						width: 200px;
    					}

    				p.last {
    					padding: 0 0 40px 0;
    					border-bottom: 1px solid #e0e0e0;
    				}

    				.footer-nav {
    					margin: 0;
    					padding: 0;
    					color: #e0e0e0;
    					font-size: 14px;
    				}

    					.footer-nav li {
    						list-style: none;
    						display: inline;
    					}

    					.footer-nav a {
    						color: #b3b3b3;
    						margin: 0 8px 0 8px;
    						display: inline-block;
    					}

    					.footer-nav li:first-child a {
    						margin-left: 0;
    					}

        </style>
    </head>

There were no HTML comments containing hidden code in the <head> section.
Please let me know if there's anything else you need.

Kind Regards,
Susan Bontia
