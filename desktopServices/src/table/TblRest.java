/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package table;

/**
 *
 * @author ale_a
 */
import javax.swing.BorderFactory;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.border.TitledBorder;
import javax.swing.table.DefaultTableModel;

public class TblRest {

    public DefaultTableModel model;

    public void tblr() {
        JFrame frame = new JFrame();
        JPanel panel = new JPanel();
        panel.setBorder(BorderFactory.createTitledBorder(BorderFactory.createEtchedBorder(), "Restaurantes", TitledBorder.CENTER, TitledBorder.TOP));
        JTable table = new JTable();
        model = new DefaultTableModel();
        model.addColumn("ID Res");
        model.addColumn("Restaurante");
        model.addColumn("Direccion");
        model.addColumn("Tel");

        table.setModel(model);
        panel.add(new JScrollPane(table));
        frame.add(panel);
        frame.setSize(550, 400);
        frame.setVisible(true);

    }

}
