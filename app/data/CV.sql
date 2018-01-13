CREATE TABLE curriculumvitae (
    id SMALLSERIAL PRIMARY KEY,
    beginning DATE,
    ending DATE CHECK (beginning < ending),
    poste VARCHAR(12) NOT NULL,
    descriptif TEXT NOT NULL,
    employer SMALLINT REFERENCES employer(id)
);
