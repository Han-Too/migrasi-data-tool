<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Decimal;

class Deposito extends Controller
{
    public function index()
    {
        ini_set('max_execution_time', 1200);
        $nama = DB::table('deposito_ksr')->get();
        $cif = DB::table('deposito_ksr2')->get();
        $ori = DB::table('deposito_ksr_ori')->get();
        $getcif = DB::table('cif')->get();
        $rate = array();
        for ($i = 0; $i < count($cif); $i++) {
        // for ($i = 0; $i < count($cif); $i++) {
            // $rate[$i] = number_format((int)str_replace('.','',substr($cif[$i]->saldoawal,0,-3)),2,",",".");
            // $rate[$i] = str_pad($i+1, 7, '0', STR_PAD_LEFT);
            

            // if(substr($nama[$i]->noidentitas,7,2) > 40){
            //     DB::table('cif')
            // ->where('noidentitas',$nama[$i]->noidentitas)
            // ->update([
            //     'kodejnskelamin' => "P",
            // ]);

            // $data[] = $nama[$i]->namaidentitas;
            // }

            // for ($x = 0; $x < count($getcif); $x++) {
            //     if ($cif[$i]->ciflama == $getcif[$x]->cif_lama) {
            //         DB::table('deposito_ksr2')
            //             ->where('cif', $cif[$i]->cif)
            //             ->update([
            //                 'cif' => $getcif[$x]->cif
            //             ]);
            //     }
            // }

            // DB::table('cif')
            // ->where('cif',$nama[$i]->cif)
            // ->update([
            //     'cif' => str_pad($i+1, 7, '0', STR_PAD_LEFT)
            // ]);

            DB::table('deposito')
                ->where('norekdep', $nama[$i]->norekdep)
                ->insert([
                    "kodeljk"=>$nama[$i]->kodeljk,
                    "sandicabang"=>$nama[$i]->sandicabang,
                    // "ciflama"=>$nama[$i]->ciflama,
                    "cif"=>$nama[$i]->cif,
                    "opr_ja"=>$nama[$i]->opr_ja,
                    "cif_ja"=>$nama[$i]->cif_ja,
                    "nomor"=>$nama[$i]->nomor,
                    "noreklama"=>$nama[$i]->noreklama,
                    // "nama"=>$nama[$i]->nama,
                    "norekdep"=>$nama[$i]->norekdep,
                    "kodeproduk"=>$nama[$i]->kodeproduk,
                    "nobilyet"=>$nama[$i]->nobilyet,
                    "saldoawal"=>$nama[$i]->saldoawal,
                    "saldoakhir"=>$nama[$i]->saldoakhir,
                    "rate"=>$nama[$i]->rate,
                    "jangkawaktu"=>$nama[$i]->jangkawaktu,
                    "tglbuka"=>$nama[$i]->tglbuka,
                    "tglefektif"=>$nama[$i]->tglefektif,
                    "tgljthtempo"=>$nama[$i]->tgljthtempo,
                    "tglbng_from"=>$nama[$i]->tglbng_from,
                    "tglbng_to"=>$nama[$i]->tglbng_to,
                    "tglbayar"=>$nama[$i]->tglbayar,
                    "tgltutup"=>$nama[$i]->tgltutup,
                    "stsaro"=>$nama[$i]->stsaro,
                    "stsrekdep"=>$nama[$i]->stsrekdep,
                    "bunga_ke_pokok"=>$nama[$i]->bunga_ke_pokok,
                    "bunga_acrual"=>$nama[$i]->bunga_acrual,
                    "pajak"=>$nama[$i]->pajak,
                    "biayatrx"=>$nama[$i]->biayatrx,
                    "haribunga"=>$nama[$i]->haribunga,
                    "modulpokok"=>$nama[$i]->modulpokok,
                    "norekpokok"=>$nama[$i]->norekpokok,
                    "modulbunga"=>$nama[$i]->modulbunga,
                    "norekbunga"=>$nama[$i]->norekbunga,
                    "modulcair"=>$nama[$i]->modulcair,
                    "norekcair"=>$nama[$i]->norekcair,
                    "dokumen"=>$nama[$i]->dokumen,
                    "tujuan_buka"=>$nama[$i]->tujuan_buka,
                    "catatan"=>$nama[$i]->catatan,
                    "sumber_dana_apu"=>$nama[$i]->sumber_dana_apu,
                    "kodeao"=>$nama[$i]->kodeao,
                    "kodekolektor"=>$nama[$i]->kodekolektor,
                    "kodewilayah"=>$nama[$i]->kodewilayah,
                    "stsbar"=>$nama[$i]->stsbar,
                    "oto"=>$nama[$i]->oto,
                    "oto_date"=>$nama[$i]->oto_date,
                    "oto_user"=>$nama[$i]->oto_user,
                    "create_date"=>$nama[$i]->create_date,
                    "create_user"=>$nama[$i]->create_user,
                    "update_date"=>$nama[$i]->update_date,
                    "update_user"=>$nama[$i]->update_user,
                    "add_rate"=>$nama[$i]->add_rate,
                    "add_bunga_hitung"=>$nama[$i]->add_bunga_hitung,
                    "add_pajak"=>$nama[$i]->add_pajak,
                    "biayatrx_rate"=>$nama[$i]->biayatrx_rate,
                    "cifid"=>$nama[$i]->cifid,
                    "noaccid"=>$nama[$i]->noaccid,
                    "kodeub"=>$nama[$i]->kodeub,
                    "va_no"=>$nama[$i]->va_no,
                    "va_periode_close"=>$nama[$i]->va_periode_close,
                    "va_status"=>$nama[$i]->va_status,
                    "metode_bunga_ke_pokok"=>$nama[$i]->metode_bunga_ke_pokok,
                ]);

            // $rate[$i] = (float)(str_replace(',','.',$cif[$i]->rate));
            
                // dd(((int)$cif[$i]->noreklama));
            // DB::table('deposito_ksr')
            //     ->where('noreklama', $cif[$i]->noreklama)
            //     ->update([
            //         'norekdep' => str_replace('0010303','0010301',$cif[$i]->norekdep)
            //         // 'norekdep' => ($cif[$i]->sandicabang).("03").($cif[$i]->kodeproduk).("0000").$i+1,
            //         // 'noreklama' => $cif[$i]->norekdep,
            //         // 'saldoawal' => (int)str_replace('.','',substr($cif[$i]->saldoawal,0,-2)),
            //         // 'saldoakhir' => $cif[$i]->saldoakhir == 0 ? 0.00 : (int)str_replace('.','',substr($cif[$i]->saldoakhir,0,-2)),
            //         // 'opr_ja' => $cif[0]->opr_ja,
            //         // 'nomor' => $cif[0]->nomor,
            //         // 'stsaro' => $cif[0]->stsaro,
            //         // 'bunga_ke_pokok' => $cif[0]->bunga_ke_pokok,
            //         // 'pajak' => $cif[0]->pajak,
            //         // 'biayatrx' => $cif[0]->biayatrx,
            //         // 'haribunga' => $cif[0]->haribunga,
            //         // 'modulpokok' => $cif[0]->modulpokok,
            //         // 'modulbunga' => "2",
            //         // 'modulcair' => "2",
            //         // 'sumber_dana_apu' => $cif[0]->sumber_dana_apu,
            //         // 'kodeao' => $cif[0]->kodeao,
            //         // 'kodekolektor' => $cif[0]->kodekolektor,
            //         // 'kodewilayah' => $cif[0]->kodewilayah,
            //         // 'rate' => (float)(str_replace(',','.',$cif[$i]->rate)),
            //         // 'tglbuka' => $cif[$i]->tglbuka,
            //         // 'tglefektif' => $cif[$i]->tglefektif,
            //         // 'tgljthtempo' => $cif[$i]->tgljthtempo,
            //         // 'tglbayar' => $cif[$i]->tglbayar,
            //         // 'tgltutup' => $cif[$i]->tgltutup,
            //         // 'tglbng_from' => null,
            //         // 'tglbng_to' => null,
            //         // 'stsrekdep' => "1",
            //         // 'stsbar' => $cif[0]->stsbar,
            //         // 'oto' => $cif[0]->oto,
            //         // 'oto_date' => $cif[0]->oto_date,
            //         // 'oto_user' => $cif[0]->oto_user,
            //         // 'create_date' => $cif[0]->create_date,
            //         // 'create_user' => $cif[0]->create_user,
            //         // 'update_date' => $cif[0]->update_date,
            //         // 'update_user' => $cif[0]->update_user,
            //         // 'bunga_hitung' => "0",
            //         // 'metode_bunga_ke_pokok' => "0",
            //         // 'add_rate' => $cif[0]->add_rate,
            //         // 'add_bunga_hitung' => $cif[0]->add_bunga_hitung,
            //         // 'add_pajak' => $cif[0]->add_pajak,
            //         // 'biayatrx_rate' => $cif[0]->biayatrx_rate,
            //         // 'cifid' => $cif[0]->cifid,
            //         // 'noaccid' => $cif[0]->noaccid,
            //         // 'kodeub' => "001",
            //         // 'kodeljk' => "601340",
            //         // 'sandicabang' => "001",
            //         // 'cif' => $getcif[$i]->cif,

            //     ]);
        }
        // dd($rate);
        $data = DB::table('cif')->get();
        return view('test', compact('data'));
    }
}
