<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'nom' => 'Best Western Premier', 
            'slug' => 'best-western',
        	'adresse' => '50 Angle Louverture  & geffrard, Pétionville, Port-au-prince, Haiti ', 
            'telephone' => '',
        	'nbre_chambre' => 200,
        	'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(8);


    Product::create([
            'nom' => 'Mariott',
            'slug' => 'mariott', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Mariott ',   
        ])->Departement()->attach(8);


    Product::create([
            'nom' => 'Royal oasis', 
            'slug' => 'el-rancho',
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(8);

    Product::create([
            'nom' => 'villa-therese',
            'slug' => 'villa-therese', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(8);

    Product::create([
            'nom' => 'cap-lamandou',
            'slug' => 'cap-lamandou', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(8);

    Product::create([
            'nom' => 'Florida',
            'slug' => 'florida', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(8);

    Product::create([
            'nom' => 'Le Relais',
            'slug' => 'lerelais', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(6);

    Product::create([
            'nom' => 'Auberge Villa-Cana',
            'slug' => 'auberge', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(9);

    Product::create([
            'nom' => 'Samata',
            'slug' => 'samata', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(9);

    Product::create([
            'nom' => 'Auber-Cayes',
            'slug' => 'auber-cayes', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(9);


    Product::create([
            'nom' => 'Le Mangier',
            'slug' => 'lemangier', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire.

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(9);


    Product::create([
            'nom' => 'Le Marien',
            'slug' => 'lemarien', 
            'adresse' => '50 Angle Louverture & geffrard', 
            'telephone' => '',
            'nbre_chambre' => 200,
            'ville' => 'Petion-Ville',
            'nbre_de_lit' => 400,
            'type_de_chambre' => '',
            'montant' => '',
            'description' => 'Affichant une décoration moderne, l’établissement BW Premier Petion-Ville, Haiti est situé au cœur de Pétion-Ville. Il propose une piscine extérieure et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Un bar à whisky est également disponible sur place.

Dotées de la climatisation, les chambres et les suites de luxe disposent toutes d\'une télévision par câble à écran plat ainsi que d\'un bureau. Elles sont également équipées d\'un réfrigérateur, d\'un téléphone et d\'un coffre-fort.

Vous trouverez un restaurant méditerranéen à 500 mètres de l\'établissement BW Premier Petion-Ville, Haiti ainsi qu\'une pizzeria à seulement 150 mètres.

Le BW Premier Petion-Ville, Haiti vous proposera également un spa, des salles de réunion, un centre de remise en forme, un service de nettoyage à sec et une navette aéroport.

L\'hôtel BW Premier Petion-Ville, Haiti se trouve à 10,5 km de l\'ambassade américaine et de l\'aéroport international Toussaint Louverture ainsi qu\'à seulement 700 mètres d\'un quartier commerçant.

Ce quartier (Pétionville) est un choix idéal pour les voyageurs qui s\'intéressent à ces thèmes : la relaxation, les climats ensoleillés et l\'histoire->Departement()->attach(10).

Cet établissement a également été bien noté pour son excellent emplacement à Port-au-Prince ! Les clients en sont plus satisfaits en comparaison avec d\'autres établissements dans cette ville.

Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 8,6 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Port-au-Prince ! Les clients en ont plus pour leur argent en comparaison avec d\'autres établissements dans cette ville.',   
        ])->Departement()->attach(6);
    }
}
