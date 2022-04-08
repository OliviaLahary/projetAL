<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandre Lavernhe -Rc Patrimoine-</title>
</head>
<body>
    
    <div >
        <header>
            <div id="titre_ppal">
                <div id="logo">
                    <img src="img/logo_small.png" alt="logo RC patrimoine">
                </div>
                <h1>Alexandre Lavernhe</h1>
                <h2>Votre consultant patrimonial</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#accueil">Accueil | </a></li>
                    <li><a href="#le_cabinet">Le cabinet | </a></li>
                    <li><a href="#notre_approche">Notre approche | </a></li>
                    <li><a href="#les_partenaires">Les partenaires | </a></li>
                    <li><a href="#nos_solutions">Nos solutions | </a></li>
                    <li><a href="#contact">Contact &nbsp;</a></li>
                </ul>
            </nav>
        </header>
        <main id="bloc_page">
            <div id="banniere_img">
                <img class="banniere_picture" src="img/natureBaniereCrop.jpg" alt="">
               <div id="banniere_desc">
                     Alexandre Lavernhe, Votre consultant patrimonial
               </div>
            </div>
            <section>
                <article>
                    <h2 id="accueil">Accueil</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nemo odit maxime error ad repellendus iure cumque minima quae ut blanditiis possimus, commodi et velit dolore modi eveniet ratione quidem!
                    Laboriosam adipisci distinctio unde voluptate deleniti sit quia sed, nisi, quasi porro minus quae totam perspiciatis non rerum beatae quisquam error tempora! Recusandae enim, earum saepe assumenda architecto ipsam dignissimos.
                    Atque voluptatum dicta doloribus expedita pariatur, doloremque impedit quam? Maxime illo autem incidunt rerum fugit modi tenetur velit aliquid! Possimus minima obcaecati reprehenderit molestias non eos maxime nihil ipsam quasi.
                    Eaque quasi veritatis, nesciunt odit sunt animi, iusto quis eum porro minima labore quae a quam? Iusto, optio labore ex corrupti dolor qui assumenda. Enim sed nulla quisquam dolorum illo?
                    Voluptatum repudiandae nesciunt illo, nulla vero eos nisi quas, animi quisquam saepe tempore iste cumque dolore officia molestiae in expedita eaque minus reiciendis explicabo consequatur itaque pariatur. Reprehenderit, deleniti quibusdam.</p>
                </article>

                
                <aside class="a_propos">
                    <h2>A propos de moi</h2>
                    <p id="photo_Alex"><img src="img/AlexandreLavernhe500x350.jpg" alt="portrait Alex Lavernhe">
                    </p>
                    <p> Bonjour je suis Alex Lavernhe conseiller en investissement 
                    </p>
                    <p><img id="logo_reseaux" src="img/logo_linkedin.png" alt="logo linkedIn"></p>
                </aside>


            </section>
                <article>
                    <h2 id="le_cabinet"> Le cabinet </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium magnam aperiam similique velit. Vero explicabo porro earum debitis mollitia inventore ullam, animi ea atque nam sit qui placeat rerum consectetur?
                    Dignissimos officiis cupiditate similique, neque, assumenda nemo sint voluptas error eaque ex dolorem doloremque eveniet ut facere iste dolor earum. Voluptatibus porro laborum illo dignissimos nesciunt architecto eveniet sunt vitae!</p>
                </article>
                <article>
                    <h2 id="notre_approche"> Notre approche </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium delectus error itaque tempora officiis temporibus illum voluptatem, animi nesciunt perspiciatis, mollitia ipsam asperiores! Accusamus temporibus, autem eligendi distinctio incidunt sequi.
                    Esse dolor adipisci quo! Rem aperiam enim dolorem odit fugit quos beatae ab optio pariatur, voluptas aliquam, animi necessitatibus itaque, et ipsa inventore quasi fugiat eaque provident doloremque ipsum? Aliquid!</p>
                </article>
                <article>
                    <h2 id="les_partenaires">Les partenaires </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis enim recusandae earum facilis aperiam quos quaerat voluptate, ducimus quia nemo dolorum fugit vel doloribus ipsa quasi iure cumque veritatis vitae?
                    Perspiciatis eligendi mollitia, non vel quisquam iste quaerat alias sunt doloremque laudantium velit maxime dolorem sit voluptatibus nemo dolores accusamus voluptatem totam modi ipsa aperiam exercitationem sequi deserunt magnam! Quis.</p>
                </article>
                <article>
                    <h2 id="nos_solutions">Nos solutions </h2>
                    <div>
                        <h3>Nos solutions financières</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis enim recusandae earum facilis aperiam quos quaerat voluptate, ducimus quia nemo dolorum fugit vel doloribus ipsa quasi iure cumque veritatis vitae?</p>
                    </div>
                    <div>
                        <h3>Nos solutions immobilières</h3>
                    <p> Perspiciatis eligendi mollitia, non vel quisquam iste quaerat alias sunt doloremque laudantium velit maxime dolorem sit voluptatibus nemo dolores accusamus voluptatem totam modi ipsa aperiam exercitationem sequi deserunt magnam! Quis.</p>
                </div>
                </article>
                <article>
                    <h2 id="contact">Contact</h2>
                    <div id="contact">
                        <form method="post" action="traitement.php">
                           <fieldset class="form_contact">
                               <legend>Vos coordonnées </legend> 
                               
                                <label for="name">Nom : </label> <input class="form-control" type="text" id="name" name="user_name"><br>
                            
                            
                                <label for="mail">E-mail : </label>
                                <input class="form-control" type="email" id="mail" name="user_mail"> <br>

                                <label for="phone">Téléphone : </label>
                                <input class="form-control" type="phone" id="phone" name="user_phone"> <br>

                                Vous souhaitez: <br>
                                <input type="checkbox" name="demandeRenseignements" id="demandeRenseignements"> <label for="demandeRenseignements">Demander un renseignement  </label> <br>

                                <input type="checkbox" name="etreRappelé" id="etreRappele"> <label for="etreRappele"> Etre rappelé  </label> <br>

                                <input type="checkbox" name="brochure" id="brochure"> <label for="brochure"> Recevoir notre plquette  </label>

                                <br><br><br>
                                
                                <br> 
                            </fieldset>
                            <fieldset class="message">
                                <legend>Votre message</legend>
                                <label for="msg">Message :</label>
                                <textarea class="form-control" id="msg" name="user_message"></textarea> 
                            
                                <input class="btn" type="submit" value="Envoyer">
                            </fieldset>
                        </form>
                    </div>
                </article>
                
            </section>
            
 
        </main>
        <footer>
            <div id="coordonnées">
                <h2>Coordonnées</h2>
                <h4>Alexandre Lavernhe</h4>
                <p>Rue de Saquet <br> 19000 Tulle</p>
                <p>06.00.00.00.00</p>
                <a href="mailto:alexandre.lavernhe@rcpatrimoine/fr"> Me contacter </a>
            </div>
            
        </footer>
    </div>
    
</body>
</html>