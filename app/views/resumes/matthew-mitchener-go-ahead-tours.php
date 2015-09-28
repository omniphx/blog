<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Matt Mitchener | SFDC Developer, Administrator</title>
<style type="text/css">

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
}
audio:not([controls]) {
  display: none;
}
[hidden] {
  display: none;
}
html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
html,
button,
input,
select,
textarea {
  font-family: sans-serif;
}
body {
  margin: 0;
}
a:focus {
  outline: thin dotted;
}
a:hover,
a:active {
  outline: 0;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
h2 {
  font-size: 1.5em;
  margin: 0.83em 0;
}
h3 {
  font-size: 1.17em;
  margin: 1em 0;
}
h4 {
  font-size: 1em;
  margin: 1.33em 0;
}
h5 {
  font-size: 0.83em;
  margin: 1.67em 0;
}
h6 {
  font-size: 0.75em;
  margin: 2.33em 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
blockquote {
  margin: 1em 40px;
}
dfn {
  font-style: italic;
}
mark {
  background: #ff0;
  color: #000;
}
p,
pre {
  margin: 1em 0;
}
pre,
code,
kbd,
samp {
  font-family: monospace, serif;
  _font-family: 'courier new', monospace;
  font-size: 1em;
}
pre {
  white-space: pre;
  white-space: pre-wrap;
  word-wrap: break-word;
}
q {
  quotes: none;
}
q:before,
q:after {
  content: '';
  content: none;
}
small {
  font-size: 75%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
dl,
menu,
ol,
ul {
  margin: 1em 0;
}
dd {
  margin: 0 0 0 40px;
}
menu,
ol,
ul {
  padding: 0 0 0 40px;
}
nav ul,
nav ol {
  list-style: none;
  list-style-image: none;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 0;
}
form {
  margin: 0;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
  white-space: normal;
  *margin-left: -7px;
}
button,
input,
select,
textarea {
  font-size: 100%;
  margin: 0;
  vertical-align: baseline;
  *vertical-align: middle;
}
button,
input {
  line-height: normal;
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button;
  *overflow: visible;
}
button[disabled],
input[disabled] {
  cursor: default;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
  *height: 13px;
  *width: 13px;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
  -webkit-appearance: none;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
  vertical-align: top;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}

body.pdf {
  color: black;
}
body.pdf a {
  text-decoration: none;
  color: black;
}
body.pdf .container {
  width: 1000px;
  margin: 0 auto;
  padding: 0;
  background: none;
  border: none;
  border-width: 8px 0 2px 0;
  text-align: left;
}
body.pdf .resume {
  position: relative;
  padding: 40px 80px;
}
body.pdf a[href$='.pdf'] {
  display: none;
}
body.pdf h1 {
  letter-spacing: 0;
  margin-top: 0;
  font-size: 48px;
  text-transform: uppercase;
  font-weight: normal;
}
body.pdf h2 {
  letter-spacing: 0;
  text-transform: uppercase;
  font-style: italic;
  font-weight: normal;
}
body.pdf h3 {
  float: left;
  width: 16%;
  font-style: normal;
}
body.pdf h3+p {
  float: left;
  width: 78%;
}
body.pdf blockquote {
  top: 40px;
  right: 50px;
  position: absolute;
}
body.pdf ul li {
  width: 33%;
  float: left;
}
body.pdf ul dl {
  margin: 0;
  padding: 0.3em 0 0;
}
body.pdf ul dl dt {
  font-size: 122%;
  font-weight: normal;
  margin: 0 0 .75em;
}
body.pdf ul dl dd {
  padding: 0 2em 0 0;
}
body.pdf ol {
  float: left;
  width: 79%;
  margin: .7em 0 0;
}
body.pdf ol li {
  width: 33%;
  margin: 0;
}
body.pdf ol li:nth-child(3n) {
  width: 34%;
}
body.pdf ol li:nth-child(1),
body.pdf ol li:nth-child(2),
body.pdf ol li:nth-child(3) {
  border-top: none;
}
body.pdf dl {
  margin: .7em 0 0;
  page-break-inside: avoid !important;
  display: block;
  width: 79%;
  float: left;
}
body.pdf dl strong {
  float: right;
  margin-top: -2em;
}
body.pdf dl em {
  font-size: 130%;
  font-style: normal;
}

.clearfix {
  zoom: 1;
}
.clearfix:after {
  display: block;
  visibility: hidden;
  height: 0;
  clear: both;
  content: ".";
}
body {
  font-family: 'Hoefler Text', Times New Roman, Times, serif;
  color: #444;
}
h1,
h2,
h3,
h4,
ul dl dt {
  font-family: Futura, "Century Gothic", AppleGothic, sans-serif;
}
.container {
  margin: 0 auto;
  padding: 0;
  background: whiteSmoke;
  border: solid #666;
  border-width: 8px 0 2px 0;
  text-align: left;
}
.resume {
  position: relative;
  padding: 10px 20px;
}
a {
  color: #990003;
}
a[href$='.pdf'] {
  display: inline-block;
  background: #666;
  color: white;
  padding: 6px 12px;
  margin-bottom: 6px;
  text-decoration: none;
}
blockquote {
  margin: 0;
  padding: 0;
  line-height: 1.4em;
}
hr {
  display: block;
  position: relative;
  padding: 0;
  margin: 18px auto;
  width: 100%;
  clear: both;
  border: none;
  border-top: 1px solid #CCC;
  font-size: 1px;
  line-height: 0;
  overflow: visible;
  page-break-after: avoid;
}
h1 {
  margin: 0;
  padding: 0;
  font-size: 36px;
  letter-spacing: -1px;
  font-weight: normal;
}
h2 {
  margin: 0;
  padding: 0;
  font-size: 18px;
  font-style: italic;
  letter-spacing: -1px;
  font-weight: normal;
}
h3 {
  margin: 0px 20px;
  padding: 0 0 .5em;
  font-size: 150%;
  font-style: italic;
  font-weight: normal;
}
h3+p {
  margin: .6em 0 16px;
  padding: 0;
  display: block;
  font-size: 104%;
  line-height: 24px;
}
ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: table;
}
ul li {
  margin: 0;
  padding: 0;
}
ul dl {
  margin: .3em 0 0;
  padding: 0;
  width: 100%;
}
ul dl dt {
  font-size: 100%;
}
ul dl dd {
  margin: 0 0 1em;
  padding: 0 2em 0 0;
  font-size: .8em;
  line-height: 1.5em;
}
ol {
  margin: 0;
  padding: 0 0 .75em;
  width: 84%;
  display: inline-block;
}
ol li {
  margin: 0 0 0 1em;
  padding: 0;
  border-top: 1px solid #CCCCCC;
  width: 100%;
  float: left;
  list-style: none;
  line-height: 24px;
  font-size: 14px;
}
ol li:nth-child(1) {
  border-top: none;
}
dl {
  display: inline-block;
  width: 78%;
  margin: 0;
  padding: 0;
}
dl dt {
  margin: 0;
  padding: 0;
  font-size: 140%;
}
dl dd {
  margin: 0 0 1.5em;
  padding: 0;
  font-size: 80%;
  line-height: 1.4em;
}
dl strong {
  display: block;
}
dl em {
  display: block;
  font-size: 110%;
  margin: .15em 0 .5em;
  font-style: bold;
}
#footer {
  display: none;
}
#footer + p {
  width: 100%;
  font-size: 11px;
  text-align: center;
}

@media screen and (min-width: 37.5em) {
  body {
    padding: 2em 0;
  }
  blockquote {
    top: 10px;
    right: 50px;
    position: absolute;
  }
  h1 {
    margin-top: .5em;
  }
  ol {
    margin: 0 0 0 1em;
  }
  ol li {
    width: 50%;
    margin: 0;
  }
  ol li:nth-child(1),
  ol li:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 57em) {
  .container {
    width: 912px;
  }
  .resume {
    position: relative;
    padding: 40px 50px;
  }
  blockquote {
    top: 40px;
    right: 50px;
    position: absolute;
  }
  h1 {
    margin-top: 0;
    font-size: 48px;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: normal;
  }
  h2 {
    text-transform: uppercase;
    font-style: italic;
    letter-spacing: 2px;
    font-weight: normal;
  }
  h3 {
    float: left;
    width: 16%;
  }
  h3+p {
    float: left;
    width: 78%;
  }
  ul li {
    width: 33%;
    float: left;
  }
  ul dl dt {
    font-size: 122%;
    font-weight: normal;
    margin-bottom: .75em;
  }
  ul dl dd {
    padding: 0 2em 0 0;
  }
  ol {
    float: left;
    width: 79%;
    margin: .6em 0 0;
  }
  ol li {
    width: 33%;
    margin: 0;
  }
  ol li:nth-child(3n) {
    width: 34%;
  }
  ol li:nth-child(1),
  ol li:nth-child(2),
  ol li:nth-child(3) {
    border-top: none;
  }
  dl {
    margin: .5em 0 0;
  }
  dl strong {
    float: right;
    margin-top: -2em;
  }
  dl em {
    font-size: 130%;
    font-style: normal;
  }
}

</style>
</head>

<body class="">

<div class="container">
    <div class="resume">
        <h1>Matt Mitchener</h1>

<h2>SFDC Developer, Administrator</h2>

<blockquote>
  <p><a href="/assets/pdfs/matthew-mitchener-go-ahead-tours.pdf">Download PDF</a><br />
  <a href="mattjmitchener@gmail.com">mattjmitchener@gmail.com</a> |
  (617) 702-4789 <br/> <a href="http://www.mattmitchener.com">Website</a> | <a href="https://github.com/omniphx">Github</a></p>
</blockquote>

<hr />

<h3 id="objective">Objective</h3>

<p>I believe that any company’s success depends on its ability to adapt to a world of rapidly changing technologies. My credentials as a SFDC Administrator and Developer and expertise as a Business Analyst will play an important role in Go Ahead Tours achieving effective, creative and simple solutions to modern business problems. I’m a proven independent worker, team player and quick learner.</p>

<hr />

<h3 id="skills">Skills</h3>

<ul>
<li><dl>
<dt>Development</dt>
<dd>Strong experience working with Salesforce architecture and design. Fluent in Apex and VisualForce markup. Demonstrated competency with triggers, unit tests, batchable apex, scheduled tasks, and SOQL/SOSL queries.</dd>
</dl></li>
<li><dl>
<dt>Administration</dt>
<dd>Provided technical support and trainings to over 1,000 Salesforce users. Managed and configured third party tools such as FinancialForce, Pardot, Hubspot, and Clicktools.</dd>
</dl></li>
<li><dl>
<dt>Data migrations</dt>
<dd>Proven success record of deploying multiple data migrations from legacy systems. Used tools such as apex dataloader, apex scripts and other import tools.</dd>
</dl></li>
</ul>

<hr />

<h3 id="experience">Experience</h3>

<dl>
<dt>Cultural Care Au Pair</dt>
<dd><em>Junior Business Analyst</em>
<strong>March 2013 – Present</strong>
Implement Salesforce and non-Salesforce projects by working between business stakeholders and a global development team. I perform quality assurance testing prior to production software releases. Demonstrated the ability to meet project deadlines and deliver quality results.</dd>

<dd>
<p><em>Inside Sales Coordinator</em>
<strong>April 2012 – March 2013</strong>
Managed a lead pipeline of prospective host families generated from inbound marketing efforts. Effectively utilized Hubspot and Salesforce CRM to drive company sales. At the time of promotion, lead sales team for 2013 fiscal year.</p>
</dd>

<dt>Hult International Business School</dt>
<dd><em>Recruitment Coordinator</em>
<strong>November 2011 – April 2012</strong>
Provided business development support to a team of account executives by calling on recent GMAT registrations. Tracked activity within Salesforce CRM.</dd>

<dt>Fineline Prototyping</dt>
<dd><em>Build prep associate</em>
<strong>May 2008 – July 2011</strong>
Coordinated custom manufacturing projects between a quoting and finishing department. Team oriented projects required a high attention to detail, knowledge of customer expectations, and strict procedural documentation. Utilized CAD software to prepare build files for stereolithography machines, a 3D printing technology. Supported clients in biotechnology, engineering and consumer product manufacturing insuring quality deliverables were met.</dd>
</dl>

<hr />

<h3 id="certifications">Courses</h3>

<dl>
<dt>Salesforce</dt>
<dd><em>ADM 201</em>
Administration Essentials for New Admins
<br/><a href="http://certification.salesforce.com/certification-detail?conId=003G000001KdPbHIAV">SFDC Certified Administer</a></dd>

<dd><em>DEV 401</em>
Building Applications with Force.com
<br/><a href="http://certification.salesforce.com/certification-detail?conId=003G000001KdPbHIAV">SFDC Certified Developer</a></dd>

<dd><em>DEV 502</em>
Integrating with Force.com</dd>
</dl>

<hr />

<h3 id="technical">Technical</h3>

<ol>
<li>Apex</li>
<li>Visualforce</li>
<li>SOQL/SOSL</li>
<li>Version control: Git, SVN</li>
<li>SOLID principles</li>
<li>HTML, CSS3, JavaScript</li>
<li>Bootstrap</li>
<li>AngularJS</li>
<li>Misc: PHP, Python</li>
</ol>

<hr />

<h3 id="awards">Awards</h3>

<p>EF Education - Nominated for Most Innovative (2013)</p>

<hr />

<h3 id="footer">Footer</h3>

<p>Matthew Mitchener
<br/><a href="mattjmitchener@gmail.com">mattjmitchener@gmail.com</a> | (617) 702-4789
<br/><a href="http://www.mattmitchener.com">Website</a> | <a href="https://github.com/omniphx">Github</a></p>

<hr />

    </div>
</div>

</body>
</html>