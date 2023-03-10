<!DOCTYPE html>
<html>

<head>
    <title>Galih Susilo</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- favicon icon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon fa-diamond"></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>Galih Susilo</h1>
                    <p>
                        With a strong foundation in programming languages and a desire to
                        continuously learn and improve,
                        <br />
                        I am ready to tackle any software development challenge.
                    </p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#experties">Experties</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <!--<li><a href="#elements">Elements</a></li>-->
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <div id="main">
            <!-- Intro -->
            <article id="intro">
                <h2 class="major">Intro</h2>
                <span class="image main"><img src="images/image1.jpeg" alt="" /></span>
                <h3>Hi,</h3>
                <p>
                    I am a software engineer with a strong passion for coding and
                    problem-solving. Although I do not have any professional experience,
                    I have completed several projects that showcase my skills and
                    abilities. I am highly motivated, eager to learn, and dedicated to
                    creating high-quality software.
                </p>

                <p>
                    I am confident in my ability to design and implement efficient and
                    effective solutions for any software development challenges that may
                    arise. I am excited to begin my career and contribute to the success
                    of any organization that I work for.
                </p>
            </article>

            <!-- Work -->
            <article id="education">
                <h2 class="major">Education</h2>
                <span class="image main"><img src="images/image2.jpeg" alt="" /></span>
                <h4 class="major">B.SC Degree</h4>
                2021 - 2023
                <h3>UNIVERSITAS SAIN DAN AL-QUR'AN WONOSOBO</h3>
                <ul>
                    <li>Department of
                        Informatics Management </li>
                </ul>
                <h4 class="major">HSC Degree</h4>
                2016 - 2023
                <h3>SUSILO TECH</h3>
                <ul>
                    <li>CEO</li>
                </ul>
            </article>

            <!-- About -->
            <article id="experties">
                <h2 class="major">Experties</h2>
                <span class="image main"><img src="images/image3.png" alt="" /></span>
                <h4 class="major">Programming languages</h4>
                <ul>
                    <li>C/C++</li>
                    <li>Object-oriented Java</li>
                    <li>Python</li>
                    <li>PHP</li>
                    <li>Javascript</li>
                    <li>Kotlin</li>
                </ul>
                <h4 class="major">Frameworks</h4>
                <ul>
                    <li>Laravel</li>
                    <li>Django</li>
                    <li>Vue JS</li>
                    <li>Bootstrap</li>
                    <li>Native Android development</li>
                </ul>
                <h4 class="major">Others</h4>
                <ul>
                    <li>Git</li>
                    <li>Docker Basic</li>
                    <li>APIs</li>
                    <li>Linux Basic</li>
                    <li>Competitive Programming</li>
                    <li>UI/UX Design</li>
                    <li>MS Office</li>
                </ul>
            </article>

            <!-- Contact -->
            <article id="contact">
                <h2 class="major">Contact</h2>
                <!-- starting of the form -->
                <form method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input required type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input required type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea required name="message" id="message" rows="4"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li>
                            <input type="submit" value="Send Message" class="primary" />
                        </li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </form>
                <!-- end of the form -->

                <ul class="icons">
                    <li>
                        <a href="https://twitter.com/calon_persiden" class="icon fa-twitter"><span
                                class="label">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://wa.me/message/JZQMDLWPRGL6C1" class="icon fa-whatsapp"><span
                                class="label">Whatsapp</span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/galihsslo/" class="icon fa-instagram"><span
                                class="label">Instagram</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/galihs12" class="icon fa-github"><span
                                class="label">GitHub</span></a>
                    </li>
                </ul>
            </article>

            <!-- Elements -->
            <article id="elements">
                <h2 class="major">Elements</h2>

                <section>
                    <h3 class="major">Text</h3>
                    <p>
                        This is <b>bold</b> and this is <strong>strong</strong>. This is
                        <i>italic</i> and this is <em>emphasized</em>. This is
                        <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                        This is <u>underlined</u> and this is code:
                        <code>for (;;) { ... }</code>. Finally,
                        <a href="#">this is a link</a>.
                    </p>
                    <hr />
                    <h2>Heading Level 2</h2>
                    <h3>Heading Level 3</h3>
                    <h4>Heading Level 4</h4>
                    <h5>Heading Level 5</h5>
                    <h6>Heading Level 6</h6>
                    <hr />
                    <h4>Blockquote</h4>
                    <blockquote>
                        Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis
                        sagittis eget tempus euismod. Vestibulum ante ipsum primis in
                        faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat
                        ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in
                        faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.
                    </blockquote>
                    <h4>Preformatted</h4>
                    <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                </section>

                <section>
                    <h3 class="major">Lists</h3>

                    <h4>Unordered</h4>
                    <ul>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Sagittis adipiscing.</li>
                        <li>Felis enim feugiat.</li>
                    </ul>

                    <h4>Alternate</h4>
                    <ul class="alt">
                        <li>Dolor pulvinar etiam.</li>
                        <li>Sagittis adipiscing.</li>
                        <li>Felis enim feugiat.</li>
                    </ul>

                    <h4>Ordered</h4>
                    <ol>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis viverra.</li>
                        <li>Felis enim feugiat.</li>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis lorem.</li>
                        <li>Felis enim et feugiat.</li>
                    </ol>
                    <h4>Icons</h4>
                    <ul class="icons">
                        <li>
                            <a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li>
                            <a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a>
                        </li>
                        <li>
                            <a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/TheAlter71" class="icon fa-github"><span
                                    class="label">Github</span></a>
                        </li>
                    </ul>

                    <h4>Actions</h4>
                    <ul class="actions">
                        <li><a href="#" class="button primary">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>
                    <ul class="actions stacked">
                        <li><a href="#" class="button primary">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>
                </section>

                <section>
                    <h3 class="major">Table</h3>
                    <h4>Default</h4>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item One</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Two</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Three</td>
                                    <td>Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Four</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Five</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <h4>Alternate</h4>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item One</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Two</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Three</td>
                                    <td>Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Four</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Five</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </section>

                <section>
                    <h3 class="major">Buttons</h3>
                    <ul class="actions">
                        <li><a href="#" class="button primary">Primary</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                    </ul>
                    <ul class="actions">
                        <li>
                            <a href="#" class="button primary icon fa-download">Icon</a>
                        </li>
                        <li><a href="#" class="button icon fa-download">Icon</a></li>
                    </ul>
                    <ul class="actions">
                        <li><span class="button primary disabled">Disabled</span></li>
                        <li><span class="button disabled">Disabled</span></li>
                    </ul>
                </section>

                <section>
                    <h3 class="major">Form</h3>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="demo-name">Name</label>
                                <input type="text" name="demo-name" id="demo-name" value=""
                                    placeholder="Jane Doe" />
                            </div>
                            <div class="field half">
                                <label for="demo-email">Email</label>
                                <input type="email" name="demo-email" id="demo-email" value=""
                                    placeholder="jane@untitled.tld" />
                            </div>
                            <div class="field">
                                <label for="demo-category">Category</label>
                                <select name="demo-category" id="demo-category">
                                    <option value="">-</option>
                                    <option value="1">Manufacturing</option>
                                    <option value="1">Shipping</option>
                                    <option value="1">Administration</option>
                                    <option value="1">Human Resources</option>
                                </select>
                            </div>
                            <div class="field half">
                                <input type="radio" id="demo-priority-low" name="demo-priority" checked />
                                <label for="demo-priority-low">Low</label>
                            </div>
                            <div class="field half">
                                <input type="radio" id="demo-priority-high" name="demo-priority" />
                                <label for="demo-priority-high">High</label>
                            </div>
                            <div class="field half">
                                <input type="checkbox" id="demo-copy" name="demo-copy" />
                                <label for="demo-copy">Email me a copy</label>
                            </div>
                            <div class="field half">
                                <input type="checkbox" id="demo-human" name="demo-human" checked />
                                <label for="demo-human">Not a robot</label>
                            </div>
                            <div class="field">
                                <label for="demo-message">Message</label>
                                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Send Message" class="primary" />
                            </li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </form>
                </section>
            </article>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">
                2023 &copy; Personal Portfolio:
                <a href="https://github.com/TheAlter71">Galih Susilo</a>.
            </p>
        </footer>
    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
