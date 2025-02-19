CREATE TABLE reactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id INT NOT NULL,
    awardee_id INT NOT NULL,
    reaction_type VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (employee_id) REFERENCES employee_register(e_id),
    FOREIGN KEY (awardee_id) REFERENCES employee_register(e_id)
);
