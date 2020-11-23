/**
 * Method untuk memforamt tanggal dan jam supaya lebih enak dibaca
 * @param  datetime $datetime
 * @return string
 */
function format_datetime($datetime)
{
    # format tanggal, jika hari ini
    if (date('Y-m-d') == date('Y-m-d', strtotime($datetime))) {
        $selisih = time() - strtotime($datetime) ;

        $detik = $selisih ;
        $menit = round($selisih / 60);
        $jam   = round($selisih / 3600);

        if ($detik <= 60) {
            if ($detik == 0) {
                $waktu = "baru saja";
            } else {
                $waktu = $detik.' detik yang lalu';
            }
        } else if ($menit <= 60) {
            $waktu = $menit.' menit yang lalu';
        } else if ($jam <= 24) {
            $waktu = $jam.' jam yang lalu';
        } else {
            $waktu = date('H:i', strtotime($datetime));
        }

        $datetime = $waktu;
    }
    # kemarin
    elseif (date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d')))) == date('Y-m-d', strtotime($datetime))) {
        $datetime = 'Kemarin ' . date('H:i', strtotime($datetime));
    }
    # lusa
    elseif (date('Y-m-d', strtotime('-2 day', strtotime(date('Y-m-d')))) == date('Y-m-d', strtotime($datetime))) {
        $datetime = '2 hari yang lalu ' . date('H:i', strtotime($datetime));
    }
    else {
        $datetime = tgl_jam_indo($datetime);
    }

    return $datetime;
}
