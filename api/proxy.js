export default async function handler(req, res) {
  const act = req.query.act || 'tes';
  const i = req.query.i || '';
  const url = `http://angker.free.nf/yttutorial/CRUDAPI/APICrud.php?act=${act}&i=${i}`;

  try {
    const response = await fetch(url);
    const data = await response.text();
    res.status(200).send(data);
  } catch (error) {
    res.status(500).json({ result: 'error', message: error.message });
  }
}
