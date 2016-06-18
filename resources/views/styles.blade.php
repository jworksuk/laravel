<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Page Name</title>

        <meta name="description" content="description here!" />
        <meta name="keywords" content="keywords" />

        <meta property="og:title" content="[ title ]" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="[ url ]" />
        <meta property="og:image" content="[ image url ]" />
        <meta property="og:site_name" content="[ site name ]" />
        <meta property="og:description" content="[ description ]"/>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

        <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="/favicon.ico" />
    </head>
    <body>
        <div id="mainWrap" class="wrap">
            <div class="grid12">
                <h2 class="display-title">Typography</h2>

                <h1>h1</h1>
                <h2>h2</h2>
                <h3>h3</h3>
                <h4>h4</h4>
                <h5>h5</h5>
                <h6>h6</h6>

                <h3 class="section-title">Default Paragraph</h3>
                <p>Lorem Ipsum is <a href="http://www.jworksuk.com">simply dummy</a> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci<a href="http://www.jworksuk.com">men book. It has survived not only fi</a>ve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <h3 class="section-title">Left align</h3>
                <p style="text-align:left;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed odio nibh, tincidunt adipiscing, pretium nec, tincidunt id, enim. Fusce scelerisque nunc vitae nisl. Quisque quis urna in velit dictum pellentesque. Vivamus a quam. Curabitur eu tortor id turpis tristique adipiscing. Morbi blandit. Maecenas vel est. Nunc aliquam, orci at accumsan commodo, libero nibh euismod augue, a ullamcorper velit dui et purus. Aenean volutpat, ipsum ac imperdiet fermentum, dui dui suscipit arcu, vitae dictum purus diam ac ligula. Praesent enim nunc, pretium eget, tincidunt in, semper at, mauris. Etiam nec ligula. Aenean purus pede, sagittis at, blandit a, dignissim nec, elit. Etiam nunc. Praesent molestie consectetuer leo. Etiam blandit leo mollis velit. Aenean varius. Maecenas in magna nec justo ornare feugiat. Mauris elit. Nunc volutpat lectus fermentum nibh.</p>

                <h3 class="section-title">Center Align</h3>
                <p style="text-align:center;">Aenean a turpis eu augue luctus vulputate. Ut nonummy arcu in est. Nulla facilisi. Fusce at est sollicitudin pede gravida luctus. Sed ut dolor non nulla luctus aliquam. Phasellus sodales dapibus turpis. Nulla malesuada. In sed quam. Donec sollicitudin convallis nisl. Donec nunc. Suspendisse malesuada libero in nisi. Etiam vitae metus non arcu gravida tincidunt. Duis accumsan purus et orci. Curabitur volutpat. Nulla quis purus id enim dapibus malesuada. Nam egestas luctus arcu. Praesent iaculis massa.</p>

                <h3 class="section-title">Right Align</h3>
                <p style="text-align:right;">Aenean tempor, risus nec eleifend tristique, sem orci aliquam urna, eget iaculis tortor mauris ut lorem. Aenean eu tellus. Sed at mauris at nisl ultricies lobortis. Vivamus lacinia, lorem vel congue facilisis, leo leo sodales leo, vitae euismod velit ante a ligula. Vivamus sit amet turpis ut eros molestie porttitor. Nam erat lacus, auctor vel, dictum a, suscipit sed, orci. Quisque est lorem, facilisis consequat, sagittis a, ullamcorper at, ante. Nullam ultricies gravida dui. Nunc mauris. Quisque neque. Quisque eu sem.</p>

                <h3 class="section-title">Justified</h3>
                <p style="text-align:justify;">Vivamus volutpat, arcu sed venenatis consequat, nulla pede blandit neque, quis ultrices ligula mauris ut leo. Proin iaculis. Pellentesque vulputate magna at lectus. Etiam semper aliquet lectus. Nullam turpis. Vivamus sed lacus. Integer metus arcu, adipiscing sed, vehicula et, vulputate sit amet, massa. Sed lobortis tempus lectus. In lacus. Duis nibh. Donec molestie libero ut neque. In sollicitudin aliquam felis. Sed molestie libero ac mi. Curabitur magna nunc, feugiat sed, sodales vitae, pretium a, leo. Sed ut ante. Integer turpis ante, facilisis sed, dignissim vitae, consectetuer sed, dui. Sed ultricies.</p>

                <!--nextpage-->
                <h2>Latin Character Tests</h2>

                <p>! " # $ % &amp; ' ( ) * + - . / 0 1 2 3 4 5 6 7 8 9 : ; &gt; = &lt;Â ? @ A B C D E F G H I J K L M N O P Q R S T U V W X Y Z [ \ ] ^ _ ` a b c d e f g h i j k l m n o p q r s t u v w x y z { | } ~</p>

                <p>This is a test to see if the fonts used in this theme support basic latin characters.</p>
                <table>
                    <tbody>
                        <tr>
                            <td>!</td>
                            <td>"</td>
                            <td>#</td>
                            <td>$</td>
                            <td>%</td>
                            <td>&amp;</td>
                            <td>'</td>
                            <td>(</td>
                            <td>)</td>
                            <td>*</td>
                        </tr>
                        <tr>
                            <td>+</td>
                            <td>,</td>
                            <td>-</td>
                            <td>.</td>
                            <td>/</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>:</td>
                            <td>;</td>
                            <td>&gt;</td>
                            <td>=</td>
                            <td>&lt;</td>
                        </tr>
                        <tr>
                            <td>?</td>
                            <td>@</td>
                            <td>A</td>
                            <td>B</td>
                            <td>C</td>
                            <td>D</td>
                            <td>E</td>
                            <td>F</td>
                            <td>G</td>
                            <td>H</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>J</td>
                            <td>K</td>
                            <td>L</td>
                            <td>M</td>
                            <td>N</td>
                            <td>O</td>
                            <td>P</td>
                            <td>Q</td>
                            <td>R</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>T</td>
                            <td>U</td>
                            <td>V</td>
                            <td>W</td>
                            <td>X</td>
                            <td>Y</td>
                            <td>Z</td>
                            <td>[</td>
                            <td>\</td>
                        </tr>
                        <tr>
                            <td>]</td>
                            <td>^</td>
                            <td>_</td>
                            <td>`</td>
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                            <td>d</td>
                            <td>e</td>
                            <td>f</td>
                        </tr>
                        <tr>
                            <td>g</td>
                            <td>h</td>
                            <td>i</td>
                            <td>j</td>
                            <td>k</td>
                            <td>l</td>
                            <td>m</td>
                            <td>n</td>
                            <td>o</td>
                            <td>p</td>
                        </tr>
                        <tr>
                            <td>q</td>
                            <td>r</td>
                            <td>s</td>
                            <td>t</td>
                            <td>u</td>
                            <td>v</td>
                            <td>w</td>
                            <td>x</td>
                            <td>y</td>
                            <td>z</td>
                        </tr>
                        <tr>
                            <td>{</td>
                            <td>|</td>
                            <td>}</td>
                            <td>~</td>
                            <td colspan="6"></td>
                        </tr>
                    </tbody>
                </table>

                <h2>Blockquote Tests</h2>
                <p>Blockquote:</p>

                <blockquote><p>Here's a one line quote.</p></blockquote>
                <p>This part isn't quoted. Here's a longer quote:</p>
                <blockquote>
                <p>It's like a language. You learn the alphabet, which are the scales. You learn sentences, which are the chords. And then you talk extemporaneously with the horn. It's a wonderful thing to speak extemporaneously, which is something I've never gotten the hang of. But musically I love to talk just off the top of my head. And that's what jazz music is all about.</p>

                <small>SAUCE // <cite>Stan Getz</cite></small></blockquote>
                <p>And some trailing text.</p>
                <h2>Table Layout Test</h2>
                <table class="statsDay">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <th class="views">Views</th>
                            <th></th>
                        </tr>
                        <tr class="alternate">
                            <td class="label"><a href="http://www.jworksuk.com/">About Test User</a></td>
                            <td class="views">1</td>
                            <td class="more">More</td>
                        </tr>
                        <tr>
                            <td class="label"><a href="http://www.jworksuk.com/">260</a></td>
                            <td class="views">1</td>
                            <td class="more">More</td>
                        </tr>
                        <tr class="alternate">
                            <td class="label"><a href="http://www.jworksuk.com/">Archives</a></td>
                            <td class="views">1</td>
                            <td class="more">More</td>
                        </tr>
                        <tr>
                            <td class="label"><a href="http://www.jworksuk.com/">235</a></td>
                            <td class="views">1</td>
                            <td class="more">More</td>
                        </tr>
                    </tbody>
                </table>

                <h2>List Type Tests</h2>
                <h3>Definition List</h3>
                <dl> <dt>Definition List Title</dt> <dd>This is a definition list division.</dd> <dt>Definition</dt> <dd>An exact statement or description of the nature, scope, or meaning of something: <em>our definition of what constitutes poetry.</em></dd> <dt>Gallery</dt> <dd>A feature introduced with WordPress 2.5, that is specifically an exposition of images attached to a post. In that same vein, an upload is "attached to a post" when you upload it while editing a post.</dd> <dt>Gravatar</dt> <dd>A globally recognized avatar (a graphic image or picture that represents a user). A gravatar is associated with an email address, and is maintained by the Gravatar.com service. Using this service, a blog owner can configure their blog so that a user's gravatar is displayed along with their comments.</dd> </dl>

                <h3>Unordered List (Nested)</h3>
                <ul>
                    <li>List item one
                        <ul>
                            <li>List item one
                                <ul>
                                    <li>List item one</li>
                                    <li>List item two</li>
                                    <li>List item three</li>
                                    <li>List item four</li>
                                </ul>
                            </li>
                            <li>List item two</li>
                            <li>List item three</li>
                            <li>List item four</li>
                        </ul>
                    </li>
                    <li>List item two</li>
                    <li>List item three</li>
                    <li>List item four</li>
                </ul>

                <h3>Ordered List</h3>
                <ol>
                    <li>List item one
                        <ol>
                            <li>List item one
                                <ol>
                                    <li>List item one</li>
                                    <li>List item two</li>
                                    <li>List item three</li>
                                    <li>List item four</li>
                                </ol>
                            </li>
                            <li>List item two</li>
                            <li>List item three</li>
                            <li>List item four</li>
                        </ol>
                    </li>
                    <li>List item two</li>
                    <li>List item three</li>
                    <li>List item four</li>
                </ol>
                <h2>HTML Element Tag Tests</h2>
                <p>All other HTML tags listed in the <a href="http://www.jworksuk.com/">FAQ</a>:</p>

                <p>Here is the address for Automattic, using the <code>&lt;address&gt;</code> tag:</p>

                <address>355 1st Street Suite 202
                San Francisco, CA 94105
                United States</address>

                <p>This is an example of <a href="http://example.com">an <code>&lt;anchor&gt;</code></a> (otherwise known as a link). This <abbr title="abbreviation">abbr.</abbr> is an example of an &lt;abbr&gt; tag in the middle of a sentence. Can you <cite>cite a reference</cite> for that, using the <code>&lt;cite&gt;</code> tag? Have you noticed that all of the tag names are displayed <code>in code-form</code>, using the <code>&lt;code&gt;</code> tag? Similarly, I could <kbd>emulate keyboard text</kbd>, using the <code>&lt;kbd&gt;</code> text tag.</p>

                <p>Oh no! I wrote something incorrectly. <del>I'd better delete it</del>, using the <code>&lt;del&gt;</code> tag. I could alternately <strike>strike something out</strike> using the <code>&lt;s&gt;</code> tag. <em>So many choices</em>, which I emphasize using the <code>&lt;em&gt;</code> tag. Just to clarify, <ins>this is some inserted text</ins>, that I'll highlight using the <code>&lt;ins&gt;</code> tag.</p>

                <p>Need to display completely unformatted text, such as a large block of code? Use the <code>&lt;pre&gt;</code> tag, which lets you display:</p>
<pre>
#container {
    float: left;
    margin: 0 -240px 0 0;
    width: 100%;

    and here's a line of some really, really, really, really long text, just to see how the PRE tag handles it and to find out how it overflows;
}
</pre>
                <p>Want to quote the WordPress tagline <q>Code is Poetry</q>? Use the <code>&lt;q&gt;</code> tag to add quotes around it. <strong>This is strong text</strong> (otherwise known as bold), using the <code>&lt;strong&gt;</code> tag.</p>

                <p>Need to write H<sub>2</sub>O or E = MC<sup>2</sup>? You may find great use for <sub>subscripting</sub> text using the <code>&lt;sub&gt;</code> tag, or for <sup>superscripting</sup> text using the <code>&lt;sup&gt;</code> tag. Need to call out a <var>variable</var>? Use the <code>&lt;var&gt;</code> tag.</p>

                <h3>HTML5-Deprecated Tags</h3>

                <p>If your Theme uses the HTML doctype (HTML5), then you don't need to worry about writing a <acronym title="three-letter acronym">TLA</acronym> using the <code>&lt;acronym&gt;</code> tag, writing <big>some over-sized text</big> using the <code>&lt;big&gt;</code> tag, <span style="text-decoration:line-through;">striking something out</span> using the <code>&lt;strike&gt;</code> tag, or <tt>emulating teletype text</tt> using the <code>&lt;tt&gt;</code> tag, because HTML5 doesn't support them!</p>

                <h2>Div and Span Tests</h2>
                <div>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <div class="myclass"><strong>This is a div with "myclass" class, inside of another div, using the <code>&lt;div&gt;</code> tag.</strong></div>
                Sed odio nibh, tincidunt adipiscing, pretium nec, tincidunt id, enim. Fusce scelerisque nunc vitae nisl.

                </div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <span><strong>This is a span inside of a paragraph, using the <code>&lt;span&gt;</code> tag.</strong></span> Sed odio nibh, tincidunt adipiscing, pretium nec, tincidunt id, enim. Fusce scelerisque nunc vitae nisl.</p>
            </div>

            <div class="grid12">
                <h2>Forms</h2>
                <form role="form">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" id="exampleInputEmail1" placeholder="Enter email">

                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" id="exampleInputPassword1" placeholder="Password">

                    <label for="exampleInputText">File input</label>
                    <input type="text" id="exampleInputText" placeholder="Text">

                    <label for="exampleSelect">Select</label>
                    <select name="exampleSelect" id="exampleSelect">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                    </select>

                    <textarea class="form-control" rows="3"></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <div class="wrap gridsystem">
            <h2>Grid System</h2>

            <div class="grids">
                <div class="grid12">12</div>
            </div>

            <div class="grids">
                <div class="grid6">6</div>
                <div class="grid6">6</div>
            </div>

            <div class="grids">
                <div class="grid8">8</div>
                <div class="grid4">4</div>
            </div>

            <div class="grids">
                <div class="grid4">4</div>
                <div class="grid4">4</div>
                <div class="grid4">4</div>
            </div>

            <div class="grids">
                <div class="grid2">2</div>
                <div class="grid2">2</div>
                <div class="grid2">2</div>
                <div class="grid2">2</div>
                <div class="grid2">2</div>
                <div class="grid2">2</div>
            </div>

            <div class="grids">
                <div class="grid1">1</div>
                <div class="grid10">10</div>
                <div class="grid1">1</div>
            </div>

            <div class="grids">
                <div class="grid1">1</div>
                <div class="grid11">11</div>
            </div>

            <div class="grids">
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
                <div class="grid1">1</div>
            </div>

            <div class="grids">
                <div class="grid5">5</div>
                <div class="grid3">3</div>
                <div class="grid4">4</div>
            </div>

            <div class="grids">
                <div class="grid5">5</div>
                <div class="grid7">7</div>
            </div>

            <div class="grids">
                <div class="grid1">1</div>
                <div class="grid5">5</div>
                <div class="grid6">6</div>
            </div>

            <div class="grids">
                <div class="grid6">6</div>
                <div class="grid4">4</div>
                <div class="grid2">2</div>
            </div>

            <div class="grids">
                <div class="grid2">2</div>
                <div class="grid8">8</div>
                <div class="grid2">2</div>
            </div>

            <div class="grids">
                <div class="grid6 offset4">6, offset 4</div>
                <div class="grid2">2</div>
            </div>

            <div class="grids">
                <div class="grid6">6</div>
                <div class="grid2 offset4">2, offset 4</div>
            </div>
        </div>

        <script src="{{ asset('/assets/js/app.js') }}"></script>
    </body>
</html>
