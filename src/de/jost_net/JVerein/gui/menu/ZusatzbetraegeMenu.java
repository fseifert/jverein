/**********************************************************************
 * $Source$
 * $Revision$
 * $Date$
 * $Author$
 *
 * Copyright (c) by Heiner Jostkleigrewe
 * All rights reserved
 * heiner@jverein.de
 * www.jverein.de
 * $Log$
 * Revision 1.1  2008/12/22 21:16:07  jost
 * Icons ins Menü aufgenommen.
 *
 * Revision 1.3  2007/03/30 13:25:11  jost
 * Wiederkehrende Zusatzabbuchungen.
 *
 * Revision 1.2  2007/02/23 20:26:58  jost
 * Mail- und Webadresse im Header korrigiert.
 *
 * Revision 1.1  2006/09/20 15:38:47  jost
 * *** empty log message ***
 *
 **********************************************************************/
package de.jost_net.JVerein.gui.menu;

import de.jost_net.JVerein.gui.action.ZusatzbetraegeDeleteAction;
import de.jost_net.JVerein.gui.action.ZusatzbetraegeNaechsteFaelligkeitAction;
import de.jost_net.JVerein.gui.action.ZusatzbetraegeResetAction;
import de.jost_net.JVerein.gui.action.ZusatzbetraegeVorherigeFaelligkeitAction;
import de.willuhn.jameica.gui.parts.CheckedContextMenuItem;
import de.willuhn.jameica.gui.parts.ContextMenu;
import de.willuhn.jameica.gui.parts.ContextMenuItem;
import de.willuhn.jameica.gui.parts.TablePart;

/**
 * Kontext-Menu zu den Zusatzbetr�gen.
 */
public class ZusatzbetraegeMenu extends ContextMenu
{

  /**
   * Erzeugt ein Kontext-Menu fuer die Liste der Zusatzbetr�ge.
   */
  public ZusatzbetraegeMenu(TablePart table)
  {
    addItem(new CheckedContextMenuItem("Vorheriges F�lligkeitsdatum",
        new ZusatzbetraegeVorherigeFaelligkeitAction(table),
        "office-calendar.png"));
    addItem(new CheckedContextMenuItem("N�chstes F�lligkeitsdatum",
        new ZusatzbetraegeNaechsteFaelligkeitAction(table),
        "office-calendar.png"));
    addItem(ContextMenuItem.SEPARATOR);
    addItem(new CheckedContextMenuItem("Erneut ausf�hren",
        new ZusatzbetraegeResetAction(table), "view-refresh.png"));
    addItem(new CheckedContextMenuItem("L�schen...",
        new ZusatzbetraegeDeleteAction(), "user-trash.png"));
  }
}