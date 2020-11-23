/**
 * Method untuk memformat tanggal ke indonesia
 *
 * @param  string $tgl
 * @return string
 */
function tgl_indo($tgl = '')
{
    if (!empty($tgl)) {
        $pisah = explode('-', $tgl);
        return $pisah[2].' '.get_indo_bulan($pisah[1]).' '.$pisah[0];
    }
}
