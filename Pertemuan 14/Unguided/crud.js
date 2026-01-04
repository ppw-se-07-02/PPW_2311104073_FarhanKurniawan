const db = require("./db");

// CREATE
exports.createMahasiswa = (data, callback) => {
  const sql = "INSERT INTO mahasiswa SET ?";
  db.query(sql, data, callback);
};

// READ
exports.getMahasiswa = callback => {
  db.query("SELECT * FROM mahasiswa", callback);
};

// UPDATE
exports.updateMahasiswa = (id, data, callback) => {
  const sql = "UPDATE mahasiswa SET ? WHERE id=?";
  db.query(sql, [data, id], callback);
};

// DELETE
exports.deleteMahasiswa = (id, callback) => {
  db.query("DELETE FROM mahasiswa WHERE id=?", id, callback);
};
