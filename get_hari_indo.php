/**
 * Fungsi untuk mendapatkan nama hari indonesia
 *
 * @param  string $hari
 * @return string
 */
function get_indo_hari($hari = '')
{
    $data = array(1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
    if (empty($hari)) {
        return $data;
    } else {
        $hari = (int)$hari;
        return $data[$hari];
    }
}
