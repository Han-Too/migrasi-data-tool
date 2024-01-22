<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Decimal;

class TestController extends Controller
{
    public function index()
    {
        // $data = "0000001";
        // $data = 1;
        // dd(date("1990-01-01"));
        ini_set('max_execution_time', 1200);
        $nama = DB::table('deposito_ksr')->get();
        $cif = DB::table('cif')->get();
        $rate = array();
        for ($i = 0; $i < count($nama); $i++) {
            // $rate[$i] = number_format((int)str_replace('.','',substr($cif[$i]->saldoawal,0,-3)),2,",",".");
            // $rate[$i] = number_format((float)str_replace(',','.',$cif[$i]->saldoawal),2);
            // $rate[$i] = number_format($nama[$i]->rate,2);
            // $rate[$i] = str_pad($i+1, 7, '0', STR_PAD_LEFT);
            // if($nama[$i]->saldoawal == $cif[$i]->saldoawal){
            //     $rate[$i] = true;
            // } else {
            //     $rate[$i] = false;
            // }
            // if(substr($nama[$i]->noidentitas,7,2) > 40){
            //     DB::table('cif')
            // ->where('noidentitas',$nama[$i]->noidentitas)
            // ->update([
            //     'kodejnskelamin' => "P",
            // ]);
            // $data[] = $nama[$i]->namaidentitas;
            // }
            // for ($x = 0; $x < count($cif); $x++) {
            //     if ($nama[$i]->ciflama == $cif[$x]->cif_lama) {
            //         DB::table('deposito_ksr')
            //             ->where('cif', $nama[$i]->cif)
            //             ->update([
            //                 'cif' => $cif[$x]->cif
            //             ]);
            //     }
            // }
            // DB::table('cif')
            // ->where('cif',$nama[$i]->cif)
            // ->update([
            //     'cif' => str_pad($i+1, 7, '0', STR_PAD_LEFT)
            // ]);


            // DB::table('deposito_ksr')
            //     ->where('sandicabang', $cif[$i]->sandicabang)
            //     ->insert([
            //         "kodeljk"=>$cif[$i]->kodeljk,
            //         "sandicabang"=>$cif[$i]->sandicabang,
            //         "ciflama"=>$cif[$i]->ciflama,
            //         "cif"=>$cif[$i]->cif,
            //         "opr_ja"=>$cif[$i]->opr_ja,
            //         "cif_ja"=>$cif[$i]->cif_ja,
            //         "nomor"=>$cif[$i]->nomor,
            //         "noreklama"=>$cif[$i]->noreklama,
            //         "nama"=>$cif[$i]->nama,
            //         "norekdep"=>$cif[$i]->norekdep,
            //         "kodeproduk"=>$cif[$i]->kodeproduk,
            //         "nobilyet"=>$cif[$i]->nobilyet,
            //         "saldoawal"=>$cif[$i]->saldoawal,
            //         "saldoakhir"=>$cif[$i]->saldoakhir,
            //         "rate"=>$cif[$i]->rate,
            //         "jangkawaktu"=>$cif[$i]->jangkawaktu,
            //         "tglbuka"=>$cif[$i]->tglbuka,
            //         "tglefektif"=>$cif[$i]->tglefektif,
            //         "tgljthtempo"=>$cif[$i]->tgljthtempo,
            //         "tglbng_from"=>$cif[$i]->tglbng_from,
            //         "tglbng_to"=>$cif[$i]->tglbng_to,
            //         "tglbayar"=>$cif[$i]->tglbayar,
            //         "tgltutup"=>$cif[$i]->tgltutup,
            //         "stsaro"=>$cif[$i]->stsaro,
            //         "stsrekdep"=>$cif[$i]->stsrekdep,
            //         "bunga_ke_pokok"=>$cif[$i]->bunga_ke_pokok,
            //         "bunga_acrual"=>$cif[$i]->bunga_acrual,
            //         "pajak"=>$cif[$i]->pajak,
            //         "biayatrx"=>$cif[$i]->biayatrx,
            //         "haribunga"=>$cif[$i]->haribunga,
            //         "modulpokok"=>$cif[$i]->modulpokok,
            //         "norekpokok"=>$cif[$i]->norekpokok,
            //         "modulbunga"=>$cif[$i]->modulbunga,
            //         "norekbunga"=>$cif[$i]->norekbunga,
            //         "modulcair"=>$cif[$i]->modulcair,
            //         "norekcair"=>$cif[$i]->norekcair,
            //         "dokumen"=>$cif[$i]->dokumen,
            //         "tujuan_buka"=>$cif[$i]->tujuan_buka,
            //         "catatan"=>$cif[$i]->catatan,
            //         "sumber_dana_apu"=>$cif[$i]->sumber_dana_apu,
            //         "kodeao"=>$cif[$i]->kodeao,
            //         "kodekolektor"=>$cif[$i]->kodekolektor,
            //         "kodewilayah"=>$cif[$i]->kodewilayah,
            //         "stsbar"=>$cif[$i]->stsbar,
            //         "oto"=>$cif[$i]->oto,
            //         "oto_date"=>$cif[$i]->oto_date,
            //         "oto_user"=>$cif[$i]->oto_user,
            //         "create_date"=>$cif[$i]->create_date,
            //         "create_user"=>$cif[$i]->create_user,
            //         "update_date"=>$cif[$i]->update_date,
            //         "update_user"=>$cif[$i]->update_user,
            //         "add_rate"=>$cif[$i]->add_rate,
            //         "add_bunga_hitung"=>$cif[$i]->add_bunga_hitung,
            //         "add_pajak"=>$cif[$i]->add_pajak,
            //         "biayatrx_rate"=>$cif[$i]->biayatrx_rate,
            //         "cifid"=>$cif[$i]->cifid,
            //         "noaccid"=>$cif[$i]->noaccid,
            //         "kodeub"=>$cif[$i]->kodeub,
            //     ]);

            

            // dd($nama[$i]->sandicabang."03".$nama[$i]->kodeproduk.str_pad($i+1, 7, '0', STR_PAD_LEFT));

            // DB::table('deposito_ksr2')
            //     // ->where('cif', $nama[$i]->cif && 'cif', $nama[$i]->cif)
            //     ->update([
            //         // 'norekdep' => ($nama[$i]->sandicabang).("03").($nama[$i]->kodeproduk).($rate[$i]),
            //         // 'noreklama' => $nama[$i]->norekdep,
            //         'saldoawal' => (int)str_replace('.','',substr($cif[$i]->saldoawal,0,-2)),
            //         // 'saldoakhir' => $cif[$i]->saldoakhir == 0 ? 0.00 : (int)str_replace('.','',substr($cif[$i]->saldoakhir,0,-2)),
            //         // 'cif_ja' => $cif[$i]->cif_ja,
            //     ]);
        }
        // dd($rate);
        $data = DB::table('cif')->get();
        return view('test', compact('data'));
    }
}
