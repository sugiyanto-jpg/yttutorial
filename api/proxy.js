export default async function handler(req, res) {
  const act = req.query.act || 'tes';
  const i = req.query.i || '';

  // GANTI URL di sini ke domain yang tidak ada script JS protection
  const url = `https://sugiyanto.kesug.com/yttutorial/CRUDAPI/APICrud.php?act=${act}&i=${i}`;

  try {
    const response = await fetch(url);
    const data = await response.text();

    res.setHeader('Content-Type', 'application/json');
    res.status(200).send(data);
  } catch (error) {
    res.status(500).json({ result: 'error', message: error.message });
  }
}
