<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class traitementform extends Controller
{
    // public function testcon(){
    //      return dd( DB::connection()->getPDO())  ;  //bash ntestew lcnx usf + ra mshina ldak lfile env bash ndiro database name
    //     //     //return dd( DB::connetion()->getDataBaseName())  ; 
    //     //     //return dd( DB::connetion()->getConfig())  ;
    //      } 
    public function ajouter(Request $r){
    //   return $r->contrat test hada

        DB::insert("insert into users(nom,prenom,poste,maillot,contrat,salaire) values('$r->nom','$r->prenom','$r->poste','$r->maillot','$r->contrat','$r->salaire')") ;

        return $this->afficher() ;

    }
    public function afficher(){
        $var=DB::select("select * from users") ;
        return view('afficher')->with('var',$var) ;
        
    }
    public function selectmodif(Request $r){ //mn ba3d lmodifier ytl3 lina l affichage
        $var=DB::select("select * from users where id='$r->id'") ;
        return view('modifier')->with('selectmodif',$var) ;
        
    }

    public function modifier(Request $r){
        DB::update("update userts set nom='$r->nom' , prenom='$r->prenom',poste='$r->poste',maillot='$r->maillot',contrat='$r->oui',salaire='$r->salaire' where id='$r->id'") ;
        return redirect('afficher');
    }
    public function supprimer(Request $r){
        DB::update("update userts set nom='$r->nom' , prenom='$r->prenom',poste='$r->poste',maillot='$r->maillot',contrat='$r->oui',salaire='$r->salaire' where id='$r->id'") ;
    }

}
