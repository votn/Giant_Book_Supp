<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('books')->insert(
            [
                'publisher_id' => 1,
                'book_title' => 'Who Are You?',
                'book_author' => 'Jung Wooyul',
                'book_year' => 2021,
                'book_synopsis' => 'Apakah kau tahu bahwa orang yang suka memukul teman di sampingnya ketika tertawa adalah orang yang ingin keberadaannya diakui? Apakah kau tahu bahwa orang yang suka gonta-ganti profil medsos sesuai isu terkini sebenarnya kurang pintar bergaul? Apakah kau tahu, barang yang kaumiliki, kebiasaan, dan tindakan sehari-hari yang tak kausadari ternyata bisa menjadi petunjuk isi hati dan kepribadianmu? Pada dasarnya, manusia adalah makhluk sosial. Agar tidak terjadi konflik dalam pergaulan, penting sekali untuk bisa memahami orang lain. Tapi, ada hal yang yang jauh lebih penting dan lebih sulit: memahami diri sendiri dengan baik. Melalui ilustrasi-ilustrasi berwarna yang menarik, buku ini akan membantumu mengenali pikiran bawah sadar yang sering kali terabaikan, supaya kau bisa memahami alasan sesungguhnya di balik emosi-emosi yang kaurasakan dalam bersosialisasi.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/9786020653662_who_are_you_cov.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 1,
                'book_title' => 'A Place Called Perfect',
                'book_author' => 'Helena Duggan',
                'book_year' => 2022,
                'book_synopsis' => 'Violet baru saja pindah ke kota baru yang bernama Perfect. Sama seperti namanya. Kota ini terlihat sempurna, kecuali satu hal. Semua penduduknya menjadi buta tidak lama setelah tiba di kota ini dan membutuhkan kacamata khusus untuk dapat melihat lagi. Saat ia menggunakan kacamata atau melepaskan kacamata keadaan sangat berbeda. Ia mencobanya beberapa kali, dan bergidik. Ia tidak menyukai kpta yang membuatnya buta, adanya jam malam, suara aneh yang terdengar setiap malam, ibunya mulai bertingkah aneh sejak pindah ke kota ini, dan yang jelas ia tidak menyukai Archer bersaudara.\\r\\nKetika ia bertemu Boy, ia menyadari bahwa ayahnya bukan satu-satunya orang yang menghilang dan rahasia Archer bersaudara mulai terungkap.\\\"\', \'https://cdn.gramedia.com/uploads/items/9786230402005_A_Place_Called_Perfect.jpg\', NULL, NULL),\r\n(3, 1, \'MetroPop: Mismatch\', \'Arata Kim\', 2022, \'Selama belasan tahun bersahabat, Kenizia selalu menganggap Giovanni sebagai pria bawel yang bisa diandalkan. Tidak pernah dia duga pria itu akan melamarnya di acara pernikahan sahabat mereka, Adit dan Risa. Walaupun Ken menghindar, Gio berusaha keras terus mendekat. Kesibukan Gio sebagai dokter spesialis jantung tidak menyurutkan tekadnya untuk menaklukkan hati Ken. Meski canggung, keduanya akhirnya sepakat untuk saling mengenal di luar status mereka sebagai sahabat. Lambat laun, Ken pun jatuh hati. Dia bahkan tetap memprioritaskan Gio saat didekati oleh Panji, klien kantornya. Kemudian kejadian demi kejadian membuat Ken mulai curiga. Karena tidak ingin terus-menerus berpraduga, Ken memutuskan untuk menanyakannya langsung kepada Gio. Namun saat menemukan jawabannya, Ken harus kembali merenungi keputusan mereka.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/9786230402005_A_Place_Called_Perfect.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 1,
                'book_title' => 'Different',
                'book_author' => 'Kadek Pingetania',
                'book_year' => 2022,
                'book_synopsis' => 'Hidup seorang Karel Antonia tidak pernah seindah yang orang-orang bayangkan selama ini. Menjadi anak berandal, anak yang sangat dingin tak tersentuh Karel lakukan hanya untuk menutupi semua lukanya. Menjadi anggota Osis dia lakukan hanya untuk melupakan masalah dalam hidupnya. Hingga suatu hari Karel bertemu dengan seseorang yang akan menjungkir balikkan kehidupannya. Mereka bertemu dengan cara yang tidak baik. Tapi pertemuan mereka seperti takdir untuk terus mempertemukan mereka dalam keadaan apapun. Kiara Ifania. Seorang gadis yang dengan tanpa sengaja masuk ke dalam Circle kehidupan seorang Karel Antonia. Pertemuan mereka yang tanpa disengaja membuat mereka menjadi seperti tikus dan kucing, tanpa tau tempat dan keadaan mereka akan selalu bertengkar. Karel dan Kiara dua nama yang hampir sama, namun memiliki segudang perbedaan antara satu sama lain. Meski mereka memiliki segudang perbedaan tapi sepertinya mereka tidak mempermasalahkan itu. Hingaa tanpa disadari salah satu diantara mereka merasakan jatuh cinta. Karel, tanpa disadari dia mencintai Kiara, dan tanpa intruksi dia telah kalah oleh temannya karena Kiara telah menjadi pacar Dimas. Karel merasa putus asa dan mulai merelakan Kiara. Karel pun mulai menghadapi permasalan keluarganya yang telah hancur saat dia masih kecil. Ya, karel seorang Broken Home. Selain permasalahan keluarga dia menghadapi masalah kisah cinta yang membuat dia dilanda rasa sakit. Seolah ujian itu tidak ada hentinya menghampiri kehidupan Karel, kini karel harus melawan seseorang yang telah dia anggap sebagai teman. Martin. Seseorang yang menyebut dirinya adalah teman Karel tapi di belakang Karel dan teman-temannya yang lain dia menyebut dirinya sebagai musuh. Martin mencoba mendekati Karel dengan menjadi temannya untuk membalaskan dendam kedua orang tuanya. Setelah semua rencana yang dia dan adiknya Jenny telah matang mereka pun mulai menjalankan aksinya. Martin dan Jenny menggunakan Kiara untuk memancing Karel. Mereka pun menjelaskan kepada Karel apa saja yang telah mereka lakukan di dalam kehidupan Karel. melancarkan aksinya dengan menusuk perut Kiara di depan mata Karel. Setelah itu Martin dan Jenny pun berhasil kabur, dan Karel membawa Kiara ke rumah sakit. Satu minggu berlalu, Karel mulai mencari bukti untuk bisa memasukkan Martin dan Jenny ke dalam penjara. Dan selama seminggu itu pun karel selalu menjenguk Kiara yang belum sadarkan diri. Karel membuat janji kepada Ayahnya Kiara untuk menjauhi Kiara setelah dia sadar. Setelah Kiara sehat dan kembali bersekolah dia melihat Karel berubah menjadi lebih berandal dan dia melihat Karel mulai menjauhinya. Sepulang sekolah kedua orang tua Kiara memberi tahu dirinya bahwa dia akan diberangkatkan ke Paris bersama dengan tantenya untuk belajar tentang fashion. Kiara sempat menolak tapi dia tetap tidak bisa menang melawan kedua orang tuanya. Keesokan harinya, Kiara menemui Karel. Saat sudah bersama Karel, Kiara pun menumpahkan segala keresahannya atas kelakuan Karel, dan Karel pun meminta Kiara untuk bersabar karena dia akan segera menyelesaikan semua masalahnya. Sebelum pergi Kiara pun memberi tahu bahwa dia akan pindah ke Paris. Membuat karel kaget sekaligus membuat pikiran Karel berkecamuk. Hari ini keberangkatan Kiara ke Paris. Setelah kepergian orang tua dan teman-temannya Kiara masih menunggu Karel. Saat Kiara hendak berjalan menuju pesawatnya Karel pun datang dan langsung saja Kiara memeluknya. Setelah sedikit berbincang dengan Karel pesawat tujuan Paris pun akan segera Take Off. Kiara berpamitan kepada Karel. Tapi, Karel menahan Kepergian Kiara dengan menyatakan cintanya secara tulus kepada Kiara. Dan akhirnya Kiara membatalkan kepergiannya ke Paris. Sekarang merekapun telah resmi menjadi sepasang kekasih. Saat kembali ke rumah, Ayah Kiara sangat tekejut saat melihat anaknya kembali ke rumah. Ayah Kiara pun marah dan menuduh Karel yang membuat anaknya tidak jadi ke berangkat ke Paris. Kiara pun menjelaskan kepada Ayahnya bahwa ini bukan kesalahan Karel. Kiara menjelaskan kepada Ayahnya bahwa ini murni atas kemauan dirinya. Karel pun berjanji kepada Ayah kiara untuk menjaga Kiara dengan nyawa Karel sebagai taruhannya. Ayah Kiara pun menyetujuinya. Akhirnya yang diinginkan Karel dan Kiara tercapai. Pasangan yang sangat berbeda, dengan watak yang bertolak belakang, kini saling melengkapi satu sama lain. Tak selamanya yang berbeda itu tidak bisa bersatu. Bisa jadi yang berbeda saling melengkapi satu sama lain.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/Cover_Buku_Different_best_seller-1.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 1,
                'book_title' => 'MetroPop: Mismatch',
                'book_author' => 'Arata Kim',
                'book_year' => 2022,
                'book_synopsis' => 'Selama belasan tahun bersahabat, Kenizia selalu menganggap Giovanni sebagai pria bawel yang bisa diandalkan. Tidak pernah dia duga pria itu akan melamarnya di acara pernikahan sahabat mereka, Adit dan Risa. Walaupun Ken menghindar, Gio berusaha keras terus mendekat. Kesibukan Gio sebagai dokter spesialis jantung tidak menyurutkan tekadnya untuk menaklukkan hati Ken. Meski canggung, keduanya akhirnya sepakat untuk saling mengenal di luar status mereka sebagai sahabat. Lambat laun, Ken pun jatuh hati. Dia bahkan tetap memprioritaskan Gio saat didekati oleh Panji, klien kantornya. Kemudian kejadian demi kejadian membuat Ken mulai curiga. Karena tidak ingin terus-menerus berpraduga, Ken memutuskan untuk menanyakannya langsung kepada Gio. Namun saat menemukan jawabannya, Ken harus kembali merenungi keputusan mereka.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/Mismatch_cov.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 1,
                'book_title' => 'Classics: Dracula',
                'book_author' => 'Bram Stoker',
                'book_year' => 2021,
                'book_synopsis' => 'Kuangkat tutup peti mati itu, dan apa yang kulihat membuat jiwaku menggigil oleh rasa takut. Count itu terbaring di situ, tapi ia seperti telah mendapatkan kembali separo masa mudanya, karena rambut dan kumisnya yang sudah putih berubah menjadi kelabu kehitaman. Bibirnya berlumuran darah segar yang menetes dari sudut-sudut mulutnya, dan mengalir ke dagu dan lehernya. Makhluk mengerikan itu boleh dikatakan memuntahkan darah. Ia terbaring bagaikan seekor lintah yang keletihan karena kekenyangan. Senyum mengejek yang terbayang di wajahnya yang membengkak itu membuatku amat marah. Inilah makhluk yang sedang kubantu kepindahannya ke London, ke tempat selama berabad-abad yang akan datang ia akan memangsa orang-orang tak berdaya. Kusambar sebuah sekop, lalu kuhantamkan mata sekop ke wajah menjijikkan itu. Waktu itu kulakukan, kepala makhluk itu berpaling dan matanya mengarah tepat kepadaku, membelalak dengan sangat mengerikan. Aku terpaku. Sekop itu terlepas dari tanganku. Yang terakhir kulihat adalah wajah yang bengkak, berlumuran darah, dan dihiasi senyum jahat yang agaknya akan tetap dibawanya sampai ke neraka jahanam.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/DRACULA.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 2,
                'book_title' => 'Angan Senja Senyum Pagi',
                'book_author' => 'Fahd Pahdepie',
                'book_year' => 2017,
                'book_synopsis' => 'Hujan malam itu lambat dan panjang. Angan dan Pagi saling mematung, terpisah jarak dari kisah mereka yang beku di ujung waktu. Lanskap taman seolah tak ingin menunjukkan diri, lampu merkuri temaram di antara mereka berdua, dikaburkan rintik hujan.\r\nAngan memerhatikan wajah Pagi. Wajah itu, wajah yang pertama kali ia lihat belasan tahun lalu dan membuat matanya nyalang semalaman, wajah yang entah bagaimana diciptakan Tuhan dengan alis yang sempurna, hidung yang sempurna, bibir yang sempurna… Tak pernah bisa pergi dari inti memorinya selama ini.\r\nAngan melangkah mendekat ketika payung miliknya lepas dari genggaman. Kemudian ia menarik ujung payung bening milik Pagi. Angan masih bisa melihat wajah Pagi dari balik payung bening itu, meski titik-titik hujan masa lalu sedikit mengaburkannya. Namun, itu cukup buat Angan… Itu cukup. Sebab ketika ia mengecup payung itu, seolah di kening Pagi, ia tak perlu menjelaskan apa-apa lagi…\r\nTentang Angan Senja yang tak pernah berhenti menanti Senyum Pagi.',
                'book_image' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1487764718i/34326408.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 4,
                'book_title' => 'Southern Eclipse',
                'book_author' => 'Asabell Audida',
                'book_year' => 2017,
                'book_synopsis' => 'Ini hanya tentang Luna, yang dibuat pusing, bingung dan gemas dengan ara pahlevi, cowok asal perth dengan sifatnya yang berubah-ubah mengikuti terbit dan terbenamnya Matahari.\r\n\r\nIni juga tentang Luna, yang marah saat Ara menyuruhnya menjauh. Tentang Luna yang bingung setiap kali ia menemukan puisi dalam lacinya. Tentang Luna yang meleleh setiap kali cowok itu tiba-tiba muncul di depan rumahnya, kemudian mengajaknya menjelajah makassar, lalu mengukir kenangan indah di setiap tempat yang mereka pijaki.',
                'book_image' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1511425076i/36646231.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 3,
                'book_title' => 'Buku 157 Hari Mencari Makna Hidup',
                'book_author' => 'Dian Inda Sari',
                'book_year' => 2018,
                'book_synopsis' => 'Pada suatu saat ada seorang mahasiswa saya meminta kepada saya, agar nilai perbaikannya A. Saya tahu kemampuan dia, kemudian saya bertanya:\r\n\r\n“Untuk apa nilai A itu?”\r\n\r\n“Agar saya bisa bekerja (melamar kerja) Bu… “\r\n\r\n“Apa kau bisa kerja?”\r\n\r\nDia terdiam, tidak bisa menjawab.\r\n\r\nBegitu juga ketika kita berdoa untuk sesuatu kepada Allah Sang Pemilik kita. Mengapa doa itu tidak menjadi kenyataan? Itu karena kita hanya melihat dari sisi keinginan kita! Bisa meminta, tapi tidak bisa mendeskripsikan apa yang kita minta? untuk apa dia? Apakah kita pantas? Yang pasti Allah akan memberikan suatu kepantasan dan juga ada rahasia kemashalatan di masa yang akan datang untuk apa sebenarnya kita diciptakan Nya. Kita semua mempunyai masa, dan terikat pada masa itu untuk beribadat kepada Nya yaitu segala usaha lahir dan batin sesuai dengan perintah Nya untuk mendapatkan kebahagiaan dan keseimbangan hidup, baik untuk diri sendiri, keluarga, masyarakat maupun terhadap alam semesta.\r\n\r\nBagaimana agar kita bisa mencapai itu semua? peganglah keyakinan ini: langkah, rezeki, pertemuan dan maut itu semua ada di tangan Allah, namun itu ada unsur aksi dan reaksi yang bermula dari diri kita sendiri. Hasil tidak akan mengingkari usaha dan usaha yang benar adalah berdasarkan ilmu dan ilmu yang benar adalah yang berasal dari keimanan yang kokoh sehingga tidak ada dusta di dalamnya dan pada akhirnya kita akan sampai kepada janji Nya:\r\n\r\n“Niscaya Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang yang diberi ilmu pengetahuan beberapa derajat.” (QS. Al Mujadilah: 11)',
                'book_image' => 'https://deepublishstore.com/wp-content/uploads/2018/12/157-Hari-Mencari-Makna-Hidup-Dis-rev-3.0-Convert-depan.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 3,
                'book_title' => 'Buku Berkubang Vs Menuntaskan Masalah: Berpikir dan Bertindak Inovatif dalam Menyelesaikan Masalah',
                'book_author' => 'Arundati Shinta',
                'book_year' => 2021,
                'book_synopsis' => 'Dalam hidup, tidak ada yang namanya kebetulan, baik kebetulan yang menyenangkan (keberuntungan) maupun kebetulan yang menyedihkan (kesialan). Segala sesuatu sudah diatur oleh Dia Yang Maha Kuasa, karena itu memang sudah menjadi grand design Dia untuk kebaikan kita. Persoalannya adalah kita sangat sering tidak mampu memahami maksud Dia, terutama ketika kita menemui banyak kesialan hidup. Alih-alih menyalahkan Dia dan pihak lain atas kesialan yang menimpa ini, situasi tersebut sebenarnya justru membuka peluang untuk menciptakan keberuntungan bagi diri sendiri. Hal ini karena keberuntungan itu betul-betul berasal dari faktor eksternal dan tidak berhubungan dengan faktor keturunan, sihir/sulap, sehingga bisa diciptakan. Keberuntungan ini sangat berguna ketika kita berhadapan dengan suatu masalah pelik dan solusinya hanya dua yakni berkubang dalam masalah atau bertindak inovatif untuk menyelesaikan masalah. Lari dari masalah dengan berperilaku negatif (flight) termasuk dalam kategori berkubang dalam masalah, karena individu tidak mengalami perubahan positif. Bertindak inovatif untuk menyelesaikan masalah termasuk dalam kategori fight.\r\n\r\nBuku ini mengupas tentang strategi orang-orang yang menghadapi masalah. Pilihannya adalah berkubang atau menuntaskan masalah. Masalah bisa terjadi di mana pun, termasuk di organisasi tempat kita bekerja. Menuntaskan masalah tidak selalu harus keluar/tetap di organisasi buruk, karena yang dipentingkan adalah tindakan inovasi dari diri kita. Keberanian berinovasi menuntun orang-orang bermasalah menjadi sehat mentalnya dan selalu beruntung hidupnya. Dasar inovasi adalah kesediaan menggali potensi diri. Sungguh beruntung bila organisasi dan juga bangsa Indonesia bila SDM-nya inovatif.',
                'book_image' => 'https://deepublishstore.com/wp-content/uploads/2021/10/Berkubang-VS-Menuntaskan-Masalah_Arundari-Shinta-70gr-Convert-depan.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 2,
                'book_title' => 'Scandalicious Siblings',
                'book_author' => 'Vinca Callista',
                'book_year' => 2018,
                'book_synopsis' => 'Kendita Arjawuni pernah mencoba jadi artis tapi gagal dan memutuskan untuk jadi sosialita, menikmati segala fasilitas hotel keluarga Arjawuni di Indonesia tanpa perlu pusing memikirkan pekerjaan atau karier. Keyman Arjawuni, hidup dengan penuh filosofi dan idealisme hidup, memutuskan menjadi musisi dan mengandalkan kedua orangtuanya untuk memenuhi kebutuhan hidupnya. Arttra Arjawuni, cerdas dan tegas, tipikal gadis modern yang ambisius dan ingin membangun bisnis sendiri. Ia ingin lekas melepaskan diri sebagai “Arjawuni” dan membuat namanya dikenal karenan kesuksesannya sendiri. Kaca Arjawuni, si bungsu milenial yang berusaha keras menjadi selebgram. Ia dan teman-temannya gemar belanja dan mengeksplor hal-hal yang berbau kekinian. Kuliah hanya demi mendukung profilnya sebagai seleb. Namun, drama hidup mereka baru saja dimulai. Konflik dalam keluarga mulai muncul, masalah-masalah yang kian mendewasakan dan menyadarkan mereka, bahwa hidup tak sesantai menanti kiriman uang dari orangtua mereka.',
                'book_image' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1534232659i/41140594.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 4,
                'book_title' => '77 Cara Bodoh Hidup Bahagia',
                'book_author' => 'Danang Priyadi',
                'book_year' => 2020,
                'book_synopsis' => 'Anda pasti sering mendengar pernyataan berikut tentang kebahagiaan.\r\n. Saya tidak bahagia karena anak saya tidak berprestasi.\r\n. Saya tidak bahagia karena pasangan saya selalu sibuk dengan pekerjaannya.\r\n. Saya tidak bahagia karena saya tidak cantik.\r\n. Saya tidak bahagia karena saya bukan orang kaya.\r\n\r\nMelalui buku ini, saya ingin mengajak Anda untuk menggali dan menemukan desain kebahagian yang telah Tuhan berikan untuk masing-masing orang. Kebahagian bukan hanya hadiah yang diberikan ketika impian dan tujuan hidup terwujud. Akan tetapi, harus diciptakan dalam pikiran.\r\n\r\nSalam Danang, Datang untuk Menang!',
                'book_image' => 'https://www.grasindo.id/images/uploads/books/9786020524504_77_Cara_Bodoh_Hidup_Bahagia_Cover_UV-1.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 3,
                'book_title' => 'Buku Apa Itu Sastra Jenis-Jenis Karya Sastra Dan Bagaimanakah Cara Menulis Dan Mengapresiasi Sastra',
                'book_author' => 'Juni Ahyar',
                'book_year' => 2019,
                'book_synopsis' => 'Sastra merupakan sarana penumpahan ide atau pemikiran tentang ―apa saja‖ dengan menggunakan bahasa bebas, mengandung ―something new‖ dan bermakna ―pencerahan‖. Keindahan sastra tidak ditentukan keindahan kata atau kalimat melainkan keindahan substansi ceritanya.\r\n\r\nPerkembangan sastra menurut bentuknya dibagi menjadi sastra lama, sastra baru, sastra modern, dan sastra kontemporer. Semua bentuk sastra terdiri dari puisi dan prosa. Puisi sastra lama masih terikat ketentuan 1 bait harus 4 kalimat dan huruf akhirnya harus sama. Prosa sastra lama menggunakan kalimat-kalimat yang indah. Puisi sastra baru adalah puisi bebas. Tidak terikat lagi oleh keharusan 1 bait harus 4 kalimat dan huruf akhir tidak selalu sama. Tetapi masih mengobral keindahan kata. Prosa sastra baru sama dengan puisi. Kalimatnya sudah bebas. Tidak mementingkan keindahan kata. Puisi sastra moderen bernuansa kritik, terutama kritik social. Prosa sastra modern lebih banyak bercerita tentang masalah sosial dan cinta. Puisi sastra kontemporer bahasanya bebas. Tidak perlu menggunakan kata-kata yang indah. Lebih mementingkan substansi daripada bentuk. Kritik bebas. Bernuansa menghendaki adanya perubahan. Ada sesuatu yang baru. Lebih bersifat pencerahan. Prosa sastra kontemporer bahasa bebas. Bahkan sebagian menggunakan bahasa gaul. Lebih menitikkan substansi. Tidak harus cerita cinta, tetapi apa saja. Ada sesuatu yang baru. Lebih bersifat pencerahan.',
                'book_image' => 'https://deepublishstore.com/wp-content/uploads/2020/01/Apa-Itu-Sastra-Jenis-Jenis-Karya-Sastra-dan-Bagaimanakah-Cara-Menulis-dan-Mengapresiasi-Sastrau_Juni-Ahyar-depan-scaled.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 3,
                'book_title' => 'Buku Apresiasi Sastra Indonesia',
                'book_author' => 'Dina Gasong',
                'book_year' => 2019,
                'book_synopsis' => 'Buku ini terdiri dari beberapa bab. Bab pertama membahas tentang hakikat apresiasi, bab dua membahas tentang proses apresiasi dan tingkat apresiasi, bab tiga membahas tentang pengertian apresiasi puisi dan komponen puisi, bab empat membahas tentang langkah-langkah menciptakan puisi dan latihan menciptakan puisi, dan bab lima membahas tentang hakikat prosa fiksi dan non-fiksi.\r\n\r\nBab enam membahas tentang apresiasi novel, bab tujuh membahas tentang hakikat drama, bab delapan membahas tentang teater transisi, teater modern, bab sembilan membahas tentang seni sastra dalam teater, dan bab sepuluh membahas tentang teks drama domba-domba revolusi dan orang asing.\r\n\r\nBab sebelas membahas tentang pendekatan konstruktivistik, bab dua belas membahas tentang model pembelajaran kesusastraan di sekolah, bab tiga belas membahas tentang evaluasi apresiasi sastra, dan bab empat belas membahas tentang prosa fiksi dan drama.\r\n\r\nApresiasi dalam diri seseorang tumbuh seiring dengan adanya pengetahuan dan pemahaman terhadap suatu karya, termasuk karya sastra. Pengetahuan dan pemahaman seseorang terhadap karya sastra berkaitan dengan kemampuannya mengapresiasi karya sastra. Tanpa pengetahuan dan pemahaman yang mendalam tentang karya sastra, niscaya apresiasi seseorang terhadap karya sastra tercapai. Apresiasi terhadap karya sastra hanya dapat dicapai mana kala seseorang memahami dan menghayati karya sastra dengan baik. Penghayatan dan pemahaman yang baik terhadap karya sastra diperoleh melalui ‗pergaulan‘ dengan karya sastra. Jadi, apresiasi sastra artinya penilaian, pemahaman, dan penghargaan terhadap karya sastra. Memahami karya sastra dengan benar, memampukan seseorang memaknai hidupnya.\r\n\r\nMelalui pembacaan dan perenungan karya sastra, seseorang dapat memahami kehidupan suatu masyarakat dalam kurun waktu tertentu. Tentang adat istiadatnya, tentang kondisi ekonomi, tentang situasi politik dan berbagai hal yang melatarbelakangi terciptanya suatu karya sastra. Dengan perenungan karya sastra orang dapat mengenal dan memahami norma-norma yang berlaku dalam suatu masyarakat. Singkatnya, melalui pembacaan dan perenungan karya sastra orang menjadi lebih teguh dan kokoh menghadapi berbagai-bagai peristiwa kehidupan. Apresiasi adalah proses menganalisis, menilai, menghargai suatu karya seni, termasuk seni sastra. Sebagai suatu proses, apresiasi melibatkan berbagai pengetahuan dan keterampilan.',
                'book_image' => 'https://deepublishstore.com/wp-content/uploads/2019/05/Apresiasi-Sastra-Indonesia-Dina-Gasong-Convert-depan.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 2,
                'book_title' => 'Buku Banteng Bersayap Kupu-Kupu',
                'book_author' => 'Mosthamir Thalib',
                'book_year' => 2022,
                'book_synopsis' => 'BANTENG BERSAYAP KUPU-KUPU ~ terbang di planet biru. Berisi puisi-puisi artikeliris. Karya-karya yang berawal dari opini. Pandangan dan sikap. Berangkat dari peristiwa dan fakta. Dibangun dengan “bancuhan” logika, etika dan estetika. Terbungkus ~ kemas ~ dalam oretan panjang yang berkisah. Satiris ironis. Tetapi terasa romantis dan manis.\r\n\r\nDalam buku kumpulan puisi ini, selain puisi-puisi artikeliris, penguntai aksara Mosthamir Thalib juga menyajikan puisi baru (bebas) dan puisi lama (tradisional) yang dikreasi sepadan situasi kondisi hari ini. Lugas dan cergas; cerdas lagi tangkas. Syair, gurindam, talibun dan igal-igalan. Menyimak dan menyibak kehidupan sosial politik ekonomi. Semuanya kritis. Tetapi lagi-lagi terasa dikemas dengan manis. Membacanya; BANTENG DAN KUPU-KUPU ~ mengasah minda; logika dengan kalbu.\r\n\r\nBuku ini terdiri dari beberapa Puisi karya sastra lainnya, diantaranya:\r\n\r\nBab 1 : Puisi Artikeliris\r\nBab 2 : Puisi Bebas\r\nBab 3 : Syair, Gurindam, Igal-Igalan, Talibun',
                'book_image' => 'https://deepublishstore.com/wp-content/uploads/2022/10/banteng.png'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 4,
                'book_title' => 'The Potion of Twilight',
                'book_author' => 'Ratih Kumala',
                'book_year' => 2018,
                'book_synopsis' => 'First of all . . . the taste of twilight is not sweet like the afternoon and not bitter like the night. The twilight has the taste of warmth.’ She trickles some flavoring liquid.\r\n\r\n‘Then the color . . . not bright like the afternoon. . . the color of twilight is: elegant.’ And then she mixes, drips and trickles some drops of liquid, the liquid of colors. ‘There is something else. . . The twilight has to produce some sensation. Not the happy sensation like the afternoon . . . not the melancholic sensation like the night. The twilight will have the sensation of: PEACE.’ She then drops some liquid of sensation. The mixture causes a tiny explosion; sparks of fire come out of it. Finally, it is done: The Potion of Twilight.\r\n\r\nShe knows that when she is creating the potion, she has to shut her mouth. She has to keep it a secret and must not tell any one at all. Because if it leaks out, god will steal the\r\nformula to enrich his creation named the ‘world’.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/9786020611679_The-Potion-of-Twilight.jpg'
            ]
        );
        DB::table('books')->insert(
            [
                'publisher_id' => 4,
                'book_title' => 'Sastra Humanitas: Konsep dan Praktik Pemaknaan',
                'book_author' => 'Suwardi Endraswara',
                'book_year' => 2017,
                'book_synopsis' => 'Buku ini merupakan kumpulan artikel yang mengkaji sastra humanitas. Fokus utama sastra adalah untuk kemuliaan manusia. Manusia memiliki dimensi unik dalam sastra. Ada manusia yang mudah melawan, putus harapan, tidak tahu perjuangan orang lain, egois dalam bertindak dan cenderung apatis dalam berbudaya. Ada manusia penuh pura-pura, berbunga-bunga, ketika ingin mendapatkan sesuatu, seolah-olah orang lain itu pujaan, tidak ada salah, penuh dengan lentikan emosi. Ada manusia pendengki, yang suatu saat dapat mengancam diri orang lain. Humanitas manusia seringkali memunculkan konflik dan perselisihan, sehingga karya sastra menjadi semakin seru.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/9786025478024C_9786025478024.jpg'
            ]
        );

    }
}
