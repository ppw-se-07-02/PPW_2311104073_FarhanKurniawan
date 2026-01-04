const express = require("express");
const crud = require("./crud");

const app = express();
app.use(express.json());
app.use(express.static("public"));

const PORT = 3000;

// CREATE
app.post("/api/mahasiswa", (req, res) => {
  crud.createMahasiswa(req.body, err => {
    if (err) return res.status(500).send(err);
    res.send("Data berhasil ditambahkan");
  });
});

// READ
app.get("/api/mahasiswa", (req, res) => {
  crud.getMahasiswa((err, results) => {
    if (err) return res.status(500).send(err);
    res.json(results);
  });
});

// UPDATE
app.put("/api/mahasiswa/:id", (req, res) => {
  crud.updateMahasiswa(req.params.id, req.body, err => {
    if (err) return res.status(500).send(err);
    res.send("Data berhasil diupdate");
  });
});

// DELETE
app.delete("/api/mahasiswa/:id", (req, res) => {
  crud.deleteMahasiswa(req.params.id, err => {
    if (err) return res.status(500).send(err);
    res.send("Data berhasil dihapus");
  });
});

app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
