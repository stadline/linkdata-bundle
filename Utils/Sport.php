<?php

namespace Geonaute\LinkdataBundle\Utils;

class Sport
{
    const ALPINISME = 153;
    const AQUAGYM = 260;
    const ARTS_MARTIAUX = 45;
    const AVIRON = 263;
    const BADMINTON = 335;
    const BASKETBALL = 10;
    const BMX = 360;
    const BODYBOARD = 264;
    const BOXE = 35;
    const CANOE_KAYAK = 265;
    const COURSE_A_PIED = 121;
    const DANSE = 79;
    const ESCALADE = 161;
    const FITNESS = 91;
    const FOOTBALL = 13;
    const GOLF = 320;
    const HANDBALL = 18;
    const HOCKEY = 20;
    const KITESURF = 273;
    const MARCHE = 113;
    const MUSCULATION_EN_SALLE = 98;
    const NATATION = 274;
    const PLANCHE_A_VOILE = 280;
    const PLONGEE = 284;
    const RAMEUR = 398;
    const RANDONNEE = 168;
    const RANDONNEE_EQUESTRE = 200;
    const RAQUETTE_A_NEIGE = 173;
    const ROLLER = 367;
    const RUGBY = 27;
    const SKATEBOARD = 374;
    const SKI = 174;
    const SKI_ALPIN = 176;
    const SNOWBOARD = 185;
    const SURF = 296;
    const TAPIS_DE_COURSE = 395;
    const TENNIS = 357;
    const TRAIL = 126;
    const TRIATHLON = 77;
    const VELO_DE_RANDONNEE = 381;
    const VELO_ELLIPTIQUE = 397;
    const VELO_EN_SALLE = 110;
    const VELO_SUR_ROUTE = 385;
    const VOILE = 301;
    const VOLLEYBALL = 32;
    const VTT = 388;
    const COURSE_D_ORIENTATION = 127;
    const MARCHE_NORDIQUE = 114;
    const RUN_AND_BIKE = 399;
    const YOGA = 105;
    const SKI_DE_RANDONNEE = 177;
    const PARAPENTE = 7;
    const TIR_A_L_ARC = 326;
    const STAND_UP_PADDLE = 400;
    const PADEL = 340;
    const SQUASH = 354;
    const TENNIS_DE_TABLE = 358;
    const HOME_TRAINER = 401;
    const SKI_DE_FOND_SKATING = 184;
    const SKI_DE_FOND_ALTERNATIF = 183;
    const CHAR_A_VOILE = 366;
    const ACTIVITY_QUOTIDIENNE = 402;

    protected static $slug_table = array(
        self::ALPINISME => "alpinisme",
        self::AQUAGYM => "aquagym",
        self::ARTS_MARTIAUX => "arts-martiaux",
        self::AVIRON => "aviron",
        self::BADMINTON => "badminton",
        self::BASKETBALL => "basketball",
        self::BMX => "bmx",
        self::BODYBOARD => "bodyboard",
        self::BOXE => "boxe",
        self::CANOE_KAYAK => "canoe-kayak",
        self::COURSE_A_PIED => "course-a-pied",
        self::DANSE => "danse",
        self::ESCALADE => "escalade",
        self::FITNESS => "fitness",
        self::FOOTBALL => "football",
        self::GOLF => "golf",
        self::HANDBALL => "handball",
        self::HOCKEY => "hockey",
        self::KITESURF => "kitesurf",
        self::MARCHE => "marche-rapide",
        self::MUSCULATION_EN_SALLE => "musculation-en-salle",
        self::NATATION => "natation",
        self::PLANCHE_A_VOILE => "planche-a-voile",
        self::PLONGEE => "plongee",
        self::RAMEUR => "rameur",
        self::RANDONNEE => "randonnee",
        self::RANDONNEE_EQUESTRE => "randonne-equestre",
        self::RAQUETTE_A_NEIGE => "raquette-a-neige",
        self::ROLLER => "roller",
        self::RUGBY => "rugby",
        self::SKATEBOARD => "skateboard",
        self::SKI => "ski",
        self::SKI_ALPIN => "ski-alpin",
        self::SNOWBOARD => "snowboard",
        self::SURF => "surf",
        self::TAPIS_DE_COURSE => "tapis-de-course",
        self::TENNIS => "tennis",
        self::TRAIL => "trail",
        self::TRIATHLON => "triathlon",
        self::VELO_DE_RANDONNEE => "velo-de-randonnee",
        self::VELO_ELLIPTIQUE => "velo-elliptique",
        self::VELO_EN_SALLE => "velo-en-salle",
        self::VELO_SUR_ROUTE => "velo-sur-route",
        self::VOILE => "voile",
        self::VOLLEYBALL => "volleyball",
        self::VTT => "vtt",
        self::MARCHE_NORDIQUE => "marchenordique",
        self::RUN_AND_BIKE => "runandbike",
        self::YOGA => "yoga",
        self::SKI_DE_RANDONNEE => "skiderandonnee",
        self::PARAPENTE => "parapente",
        self::TIR_A_L_ARC => "tiralarc",
        self::STAND_UP_PADDLE => "standuppaddle",
        self::PADEL => "paddletennis",
        self::SQUASH => "squash",
        self::TENNIS_DE_TABLE => "tennisdetable",
        self::HOME_TRAINER => 'home-trainer',
        self::SKI_DE_FOND_ALTERNATIF => 'skidefond-alternatif',
        self::SKI_DE_FOND_SKATING => 'skidefond-skating',
        self::CHAR_A_VOILE => 'charavoile',
        self::ACTIVITY_QUOTIDIENNE => 'marche'
    );

    public static $iconNames = array(
        self::ALPINISME => "icon-alpinisme",
        self::AQUAGYM => "icon-aquagym",
        self::ARTS_MARTIAUX => "icon-arts-martiaux",
        self::AVIRON => "icon-aviron",
        self::BADMINTON => "icon-badminton",
        self::BASKETBALL => "icon-basketball",
        self::BMX => "icon-bmx",
        self::BODYBOARD => "icon-bodyboard",
        self::BOXE => "icon-boxe",
        self::CANOE_KAYAK => "icon-canoe-kayak",
        self::COURSE_A_PIED => "icon-course-a-pied",
        self::DANSE => "icon-danse",
        self::ESCALADE => "icon-escalade",
        self::FITNESS => "icon-fitness",
        self::FOOTBALL => "icon-football",
        self::GOLF => "icon-golf",
        self::HANDBALL => "icon-handball",
        self::HOCKEY => "icon-hockey",
        self::KITESURF => "icon-kitesurf",
        self::MARCHE => "icon-marche-rapide",
        self::MUSCULATION_EN_SALLE => "icon-musculation-en-salle",
        self::NATATION => "icon-natation",
        self::PLANCHE_A_VOILE => "icon-planche-a-voile",
        self::PLONGEE => "icon-plongee",
        self::RAMEUR => "icon-rameur",
        self::RANDONNEE => "icon-randonnee",
        self::RANDONNEE_EQUESTRE => "icon-randonne-equestre",
        self::RAQUETTE_A_NEIGE => "icon-raquette-a-neige",
        self::ROLLER => "icon-roller",
        self::RUGBY => "icon-rugby",
        self::SKATEBOARD => "icon-skateboard",
        self::SKI => "icon-ski",
        self::SKI_ALPIN => "icon-ski-alpin",
        self::SNOWBOARD => "icon-snowboard",
        self::SURF => "icon-surf",
        self::TAPIS_DE_COURSE => "icon-tapis-de-course",
        self::TENNIS => "icon-tennis",
        self::TRAIL => "icon-trail",
        self::TRIATHLON => "icon-triathlon",
        self::VELO_DE_RANDONNEE => "icon-velo-de-randonnee",
        self::VELO_ELLIPTIQUE => "icon-velo-elliptique",
        self::VELO_EN_SALLE => "icon-velo-en-salle",
        self::VELO_SUR_ROUTE => "icon-velo-sur-route",
        self::VOILE => "icon-voile",
        self::VOLLEYBALL => "icon-volleyball",
        self::VTT => "icon-vtt",
        self::MARCHE_NORDIQUE => "icon-marchenordique",
        self::RUN_AND_BIKE => "icon-runandbike",
        self::YOGA => "icon-yoga",
        self::SKI_DE_RANDONNEE => "icon-skiderandonnee",
        self::PARAPENTE => "icon-parapente",
        self::TIR_A_L_ARC => "icon-tiralarc",
        self::STAND_UP_PADDLE => "icon-standuppaddle",
        self::PADEL => "icon-paddletennis",
        self::SQUASH => "icon-squash",
        self::TENNIS_DE_TABLE => "icon-tennisdetable",
        self::HOME_TRAINER => "icon-home-trainer",
        self::SKI_DE_FOND_ALTERNATIF => 'icon-skidefond-alternatif',
        self::SKI_DE_FOND_SKATING => 'icon-skidefond-skating',
        self::CHAR_A_VOILE => 'icon-charavoile',
        self::ACTIVITY_QUOTIDIENNE => 'icon-marche'
    );

    /**
     * @return integer
     */
    public static function getIcon($id)
    {
        if (isset(self::$slug_table[$id])) {
            return self::$slug_table[$id];
        } else {
            return '';
        }
    }
}
