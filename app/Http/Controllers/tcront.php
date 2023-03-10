<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;

class tcront extends Controller
{
    public function index() {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about() {
        return view('about', ["title" => "About",
                         'name' => 'Fansoli Ibnu Mustafa',
                         'email' => 'fimtafa02@gmail.com']);
    }

    public function contents() {
         return view('post', [
        "title" => "Contents",
        "isi" => Content::all()
    ]);
    }

    public function content($slug) {
        $in_post = [
            [
                "title" => "Episode 1: Raja Iblis yang menjadi manusia.",
                "slug" => "1",
                "author" => "Kang Halu",
                "desc" => "<p>Sekitar 800 juta tahun yang lalu, hidup seorang raja iblis yang sangat kejam. Raja iblis itu bernama Mugi.. tidak, sebenarnya ia bernama Mwghzrbn, tapi karena orang-orang zaman sekarang tidak dapat mengucapkannya, maka mereka mengubah namanya menjadi Mugi.. dan Mugi adalah Aku di kehidupan sebelumnya. Dahulu Aku membuat kekacauan di mana-mana, menghancurkan segalanya, dan membunuh banyak makhluk hidup hanya untuk kesenangan belaka. Namun semua itu berakhir ketika pedang sang pahlawan berhasil menusuk jantungku.</p>
    
                <p>Sekarang, Aku terlahir kembali sebagai manusia. Di kehidupan yang sekarang, Aku cukup senang karena tidak merasakan penderitaan yang dahulu Aku rasakan. Bisa dibilang Aku cukup beruntung, karena terlahir kembali sebagai anak dari keturunan bangsawan Pedeka. Tapi saat umur-ku menginjak 3 tahun, Aku baru sadar bahwa Aku tidak bisa menggunakan sihir, maupun kekuatan iblis-ku. Mungkin ini adalah hukuman bagi-ku, dan sekarang Aku akan mencoba untuk hidup menjadi orang yang baik. Yah.. Aku tidak ingin kehilangan seseorang lagi.</p>
               
                <p>10 tahun telah berlalu, dan sekarang Aku memiliki satu adik perempuan, dia memiliki kekuatan sihir yang sangat hebat. Oh ya, Aku lupa belum memperkenalkan diri, mohon maaf, hehe. Jadi seperti yang kalian tahu, sekarang Aku merupakan manusia keturunan bangsawan Pedeka, dan nama-ku adalah Karzhi Pedeka. Ayah-ku adalah seorang penyihir yang sangat hebat, dia juga sepertinya orang penting di sini, dan beliau bernama Edgar Pedeka. Lalu Ibu-ku adalah seorang mantan buronan, dia memiliki kemampuan mengayunkan pedang yang sangat hebat, dia juga cukup hebat dalam menggunakan sihir loh! Apalagi saat dia menggabungkan teknik sihir dan pedangnya, itu terasa sangat keren bagi-ku! Seperti.. Pahlawan yang membunuhku dahulu, ahahahah. Dan yang terakhir adalah Adik-ku tersayaang~ Kamye Pedeka, dia adalah anak yang penurut, dan dia sangat mahir menggunakan sihir tanpa merapal! Karena saking mahirnya, dia hampir bisa mengimbangi teknik Ayah! Ya Aku memang tidak dapat menggunakan sihir sama sekali, tapi dengan pengalaman dari kehidupan sebelumnya, dan dengan ajaran yang Ibu-ku berikan, Aku sekarang dapat mengalahkan mereka bertiga sekaligus, tanpa menggunakan sihir, dan tanpa kekuatan iblis! HAHAHAHA!</p>
               
                <p>Ngomong-ngomong, di dunia ini sudah hampir jarang terdapat ras iblis, ini membuatku tenang tapi juga merasa agak sedih. Sejarah yang mereka berikan juga sangat bertentangan dengan sejarah yang Aku alami sendiri. Aku sudah mencoba untuk menjelaskan kepada para manusia bodoh itu, tapi hanya ada tiga orang yang percaya dengan-ku. Mereka adalah Lanslette, Fasir, dan Adik-ku sendiri, Kamye. Tapi tentu saja Aku tidak bilang kepada mereka bahwa Aku adalah reinkarnasi Raja Iblis, tapi Aku bilang kepada mereka bahwa Aku adalah reinkarnasi dari korban kejadian tersebut, lebih tepatnya teman-nya si Pahlawan. Oh ya, Lanslette adalah satu-satunya teman-ku dari kecil. ya karena Aku tidak dapat menggunakan sihir.. Tidak heran banyak yang tidak ingin berteman dengan-ku. Lanslette adalah putri dari sahabat Ayah-ku, mereka dari keluarga bangsawan Nocuta. Dan Fasir adalah orang yang belum lama ini Aku temui, dia adalah manusia yang aneh karena begitu mengidolakan Raja Iblis. Dia juga seorang keturunan bangsawan dari keluarga Nezche. Yah, sekarang Aku, Lanslette, dan Fasir bersahabat.</p>
               
                <p>Sekarang Aku sudah berumur 32 tahun, dan Aku masih tetap belum menemukan jodoh-ku. Aku selalu diledek oleh Lanslette dan Fasir karena belum menikah. Adik-ku saja yang 5 tahun lebih muda dari-ku, sudah memiliki suami yang hebat. Dunia memang sangat kejam... yah, tapi ini juga mungkin merupakan balasan dari dosa yang ku perbuat di kehidupan sebelumnya.</p>"
            ],
            [
                "title" => "Episode 2: Nasib seorang mantan Raja Iblis.",
                "slug" => "2",
                "author" => "Kang Halu",
                "desc" => "<p>Malam itu.. Aku ditolak oleh seorang perempuan, dan Aku terlalu banyak minum hingga sangat mabuk. Aku terbangun di pagi menjelang siang hari, dan langsung berangkat pulang menuju ke rumah, tapi saat itu tiba-tiba cuaca menjadi sangat buruk. Banyak gumpalan awan hitam yang menutupi seisi dunia, meteor berjatuhan di mana-mana, banyak kaum iblis yang keluar dari retakan tanah, mereka menghancurkan segalanya, dan memakan semua yang ada di depan mata mereka. Dan di saat itu juga, Aku langsung bergegas untuk menyelamatkan Lanslette dan Fasir, tapi Aku terlambat, Aku melihat tubuh Fasir dan Istri serta Anak-Anaknya yang terpotong-potong, dan tubuh Lanslette yang tersisa hanyalah kepalanya saja.. bahkan jasad dari Suami dan Anaknya tidak tersisa satu pun. Lalu Aku langsung terbang menuju ke rumah Adik-ku, tapi Aku yakin dia pasti masih hidup. Dan saat Aku sampai di sana, tentu saja mereka berdua masih hidup dan sedang melawan para Iblis yang mencoba memakan dan membunuh mereka. Aku pun mencoba untuk menolong mereka, namun saat mereka berdua melihatku, mereka berdua terlihat sangat ketakutan dan menatapku dengan mata ingin membunuh. Lalu saat Aku melihat diri-ku dari pantulan kaca di jendela, Aku sangat terkejut karena yang ku lihat di pantulan cermin bukanlah Karzhi Pedeka, melainkan Raja Iblis Mwghzrbn. Di saat mereka berdua mencoba untuk membunuhku, Aku hanya bisa terdiam dan bingung apa yang sedang terjadi.. Serangan mereka tidak mempan kepada tubuh si Raja Iblis ini. Dan pada akhirnya, ada sebuah meteor besar yang menghantam kami, dan kami bertiga pun tewas.</p>
    
                <p>Aku membuka mata-ku, dan Aku menangis sekencang-kencangnya. Semua yang ku lihat sangat terang, dan banyak suara-suara aneh yang terdengar di telinga-ku. Aku pikir awalnya ini adalah akhirat, tapi mengapa terasa tidak asing? Ya, benar saja, Aku dilahirkan kembali untuk kedua kalinya. Di kehidupan yang sekarang ini, benar-benar sangat terasa berbeda dari dua kehidupan yang sebelumnya. Tidak ada sihir, raja iblis hanyalah cerita fiksi belaka, dan hanya ada ras manusia. Banyak hal yang belum Aku ketahui di dunia ini, seperti laptop, mobil, motor, dan peralatan canggih lainnya. Bangunan-bangunan di dunia ini juga sangat besar dan tinggi-tinggi. Ini membuktikan bahwa pada masa ini, dunia sudah dikuasai oleh manusia, dan sudah tidak ada peperangan antar ras lagi. Aku sudah tidak memiliki keinginan untuk hidup, tapi Aku juga tidak ingin mati begitu saja. Setelah dilahirkan, Aku dibuang oleh Ibu-ku, lalu Aku diambil oleh sepasang suami-istri yang entah dari mana tiba-tiba datang menghampiri ku. Mereka mengurus ku dengan penuh kasih sayang, padahal Aku sama sekali tidak memiliki ikatan darah dengan mereka, tapi kenapa mereka sampai mau repot-repot mengurusiku? Aku benar-benar tidak paham dengan pola pikir manusia, mereka sangat naif.</p>
               
                <p>16 tahun berlalu sejak Aku dipungut oleh mereka, dan sekarang Aku bersekolah di SMA-N 25. Aku menghabiskan 16 tahun ku hanya dengan belajar dan bermain game, Aku pun tidak memiliki teman satu pun. Namun, sejak hari itu.. hidup-ku mulai berubah. Hari itu Aku sedang memakan bekal-ku di atap sekolah sendirian, lalu Aku melihat sekawanan burung yang terbang melewati ku. Aku terus menatap sekawanan burung itu hingga mereka tak terlihat, lalu tidak lama setelahnya, datang seorang anak perempuan yang berlari ke arah ku sambil berteriak: 'WOY! AULIAN! LO MAU NGAPAIN!? LO MASIH MUDA WOY! JANGAN KAYA GITU! KALO ADA MASALAH, MINIMAL CERITA!'</p>"
            ],
            [
                "title" => "Episode 1: Sejarah terciptanya Kami!",
                "slug" => "10",
                "author" => "Bocil Wetped",
                "desc" => "<p>33 tahun yang lalu, ada dua anak yang sedang jatuh cinta dengan seseorang. Mereka juga saling membantu satu sama lain untuk mendekati orang yang mereka sukai. Ke-dua anak itu adalah Jemi dan Hara, mereka berteman sangat baik namun sangat berbeda satu sama lain. Jemi adalah anak yang nakal dan suka membuat masalah, sedangkan Hara adalah anak yang pendiam namun dia juga merupakan anak terpintar di Sekolah. Semua ini dimulai ketika Jemi bertemu dengan kakak kelasnya, dia menyukai kakak kelasnya pada pandangan pertama. Tetapi karena Jemi tidak ingin yang lain tahu bahwa dia menyukai kakak kelasnya itu, dia pun mulai menggoda setiap perempuan yang ia temui di Sekolahnya. Lalu saat Jemi sedang bermain sepak bola, dia tidak sengaja menendang bolanya hingga masuk ke Perpustakaan, lalu dia pun disuruh oleh teman-temannya untuk mengambil bola tersebut. Sesampainya di Perpustakaan, dia melihat anak perempuan yang sedang menangis sendirian, karena tidak tega, ia pun langsung menghibur anak itu. Setelah anak itu berhenti menangis, dia pun menanyakan kepada anak itu tentang bolanya yang masuk ke Perpustakaan. Sesaat setelah Jemi menanyakan tentang bolanya itu, tiba-tiba perempuan yang di depannya marah-marah karena bolanya mengenai wajahnya dan memecahkan kaca matanya. Jemi pun terkejut dan ketakutan, dan karena ia dari keluarga yang kurang mampu, Jemi pun bingung harus berbuat apa. Karena ia tak bisa berbuat apa-apa, Jemi pun mencoba kabur dari perempuan itu. Namun saat Jemi ingin kabur, perempuan itu mengancam ke Jemi bahwa dia akan menyebarkan ke teman-temannya kalau Jemi menyukai senior di sekolahnya. Jemi pun terkejut bahwa ada seseorang yang mengetahui tentang perasaannya itu, lalu dia pun gemetar ketakutan dan memohon kepada perempuan itu untuk tidak menyebarkannya, SORRY! GUE GAK BISA GANTI KACA MATA LO, TAPI GUE BAKAL NGELAKUIN APA AJA BUAT LO, ASAL LO GAK NYEBARIN KE TEMEN-TEMEN GUE, KALO GUE SUKA SAMA KAK RINI! ucap Jemi sambil memohon ketakutan. Lalu perempuan itu tersenyum licik dan berkata Oh ya? Bagus dong! Okay kalo gitu.. Kau Jemi kan? Anak nakal yang jadi buah bibir para guru-guru? HAHAHA- ups! Maaf-maaf! Yaudah kalo gitu kenalin, Aku Hara dari kelas 7H. Salam kenal, anak nakal~!. Lalu Jemi terkejut karena perempuan yang di depannya adalah Hara si anak dewa yang merupakan anak terpintar di Sekolahannya. Setelah itu, Hara pun menjelaskan kepada Jemi bahwa dia menyukai senior juga yang bernama Azkir, dan dia memohon kepada Jemi untuk mendekatkannya kepada Azkir. Awalnya Jemi menolak dan kebingungan mengapa anak baik-baik seperti Hara menyukai anak berandalan. Lalu Hara pun menjelaskan kepada Jemi, bahwa dia dulunya merupakan anak yang nakal juga, namun setelah Ayahnya meninggal, dia ingin berubah menjadi anak yang pintar dan tidak ingin membuat masalah untuk ibunya. Lalu Hara pun juga memberi tahu bahwa kak Rini adalah sepupunya, dia pun juga menawarkan kepada Jemi untuk mendekatkannya kepada kak Rini jika dia mau membantunya untuk dekat dengan kak Azkir. Lalu Jemi pun setuju dengan penawaran Hara. Tetapi setelah itu, Hara memberitahu kepada Jemi bahwa kacamatanya itu palsu, dan dia tadi sedang menangis karena sedang membaca novel yang sedih. Mengetahui hal itu, Jemi pun sangat marah dan benci kepada Hara karena telah dibohongi, dan dia juga merupakan satu-satunya orang yang mengetahui rahasianya, dan melihat sisi lemahnya. Namun setelah ini semua, Jemi pun dan Hara semakin dekat dan saling membantu satu sama lain demi mendapatkan pujaan hatinya masing-masing.</p>

                <p>Sudah 13 tahun berlalu, tetapi dari mereka tidak ada yang berhasil untuk mendapatkan hati dari orang yang mereka sukai, dan mereka pun sudah tidak pernah bertemu lagi sejak lulus SMP. Lalu mereka secara tidak sengaja bertemu di taman, Jemi dan Hara pun terkejut karena sudah lama tidak bertemu satu sama lain. Lalu Jemi pun mengajak Hara untuk berkeliling sambil bercerita tentang saat mereka masih SMP. Sejak saat itu, mereka pun memutuskan untuk saling bertukar kontak dan selalu menghubungi satu sama lain. Seiring berjalannya waktu, mulailah ada rasa cinta di antara keduanya. Lalu Jemi pun melamar untuk menikah dengannya, dan Hara pun setuju. Mereka dikaruniai dua anak kembar namun dengan kelamin yang berbeda, anak yang lahir duluan adalah perempuan dan diberi nama Reyka Putri Harami, sedangkan anak yang lahir terakhir adalah laki-laki dan diberi nama Raziel Putra Harami. Mereka berdua terlahir normal tanpa kekurangan, keduanya juga anak yang pintar. Tetapi mereka memiliki sifat yang saling bertolak satu sama lain, Eka adalah anak periang yang penuh semangat, sedangkan Zel adalah anak yang lesu dan selalu mengantuk. Sejak mereka kecil, orang-orang mengira bahwa orang tua mereka hanya selalu memanjakan Eka, dan tidak peduli dengan Zel. Dan sekarang, mereka sudah sampai di Sekolah Menengah Atas. Mereka berdua merupakan anak yang terkenal di Sekolahnya karena kepintaran serta ketampanan dan kecantikan keduanya.</p>"
            ]
            ];
    
            $new_post = [];
            foreach($in_post as $eps) {
                if($eps["slug"] === $slug) {
                    $new_post = $eps;
                }
            }
    
        return view('read', [
            "title" => "Satu",
            "eps" => $new_post
        ]);
    }

    public function categories() {
        return view('categories', [
            'title' => 'Content Categories',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category) {
        return view('category', [
            'title' => $category->name,
            'contents' => $category->contents,
            'category' => $category->name
        ]);
    }
}
